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
foreach ($arr as $key => $value) {
    $arr[$key] = $value * 1.10;
}
echo "$arr[employee1]<br>";
echo "$arr[employee2]<br>";
echo "$arr[employee3]<br>";
echo "$arr[employee4]<br>";
echo "$arr[employee5]<br>";
echo "$arr[employee6]<br>";
echo "$arr[employee7]<br>";
