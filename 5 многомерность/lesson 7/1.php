<?php
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
foreach ($arr as $key1 => $item) {
    foreach ($item as $key2 => $sum) {
        echo $key1 . " " . $key2 . " " . $sum . "<br>";
    }
}