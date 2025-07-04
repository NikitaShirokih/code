<?php
    require_once __DIR__ . "/../config/databases.php";

    function addTask($title, $description, $category_id, $priority, $due_date) {
        $db = getDBConnection();
        $stmt = $db->prepare("INSERT INTO tasks (title, description, category_id, priority, due_date) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$title, $description, $category_id, $priority, $due_date]);
        return $db->lastInsertId();
    }

    function getTasks($filters = [])
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
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    function updateTaskStats($task_id, $status) {
        $db = getDBConnection();
        $stmt = $db->prepare("UPDATE tasks SET status = ? WHERE id = ?");
        return $stmt->execute([$status, $task_id]);
    }

    function deleteTask($task_id) {
        $db = getDBConnection();
        $stmt = $db->prepare("DELETE FROM tasks WHERE id = ?");
        return $stmt->execute([$task_id]);
    }