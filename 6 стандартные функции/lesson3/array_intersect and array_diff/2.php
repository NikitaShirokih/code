<?php
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result1 = array_diff($arr1, $arr2);
$result2 = array_diff($arr2, $arr1);
var_dump($result1 + $result2);
