<?php
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
$number = 400;
foreach ($arr as $key => $value) {
    if ($value <= 400) {
        $arr[$key] = $value * 1.10;
    }
    echo "$key: $arr[$key]<br>";
}