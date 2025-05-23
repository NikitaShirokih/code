<?php
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$newArr = ' ';
foreach ($arr as $key => $value) {
    $data = substr((string)$value, 0, 1);
    if ($data === '1' or $data === '2') {
        echo "[$key]: $value<br>";
    }
}