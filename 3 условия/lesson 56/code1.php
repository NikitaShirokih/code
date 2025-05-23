<?php
if (isset($user['name'])) {
    $res = $user['name'];
} elseif (isset($user['surname'])) {
    $res = $user['surname'];
} else {
    $res = '';
}
?>
<?php
$res = isset($user['name']) ? $user['name'] : (isset($user['surname']) ? $user['surname'] : '';
