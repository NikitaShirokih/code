<?php
require_once __DIR__ . "/config/databases.php";
function getTasks(array $filters )
{
    $db = getDBConnection();
    $where = [];
    $params = [];

    if (!empty($filters['status'])) {
        $where[] = "status = ?";
        $params[] = $filters['status'];
    }

    if (!empty($filters['category_id'])) {
        $where[] = "category_id = ?";
        $params[] = $filters['category_id'];
    }

    if (!empty($filters['priority'])) {
        $where[] = "priority = ?";
        $params[] = $filters['priority'];
    }


    $sql = "SELECT * FROM tasks WHERE " . implode(" AND ", $where);
    return $sql;
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}
$filters = ['status' => 1, 'priority' => 2, 'category_id' => 0];
$filters = '1';
echo getTasks($filters);
