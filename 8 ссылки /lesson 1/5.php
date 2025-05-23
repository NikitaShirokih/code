<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

function func($array) {
    if (empty($array)) {
        return 0;
    }
    $value = array_shift($array);
    return $value + func($array);
}
$sum = func($arr);
echo $sum;
