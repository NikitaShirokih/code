<?php
$arr = [1, 2, 3, 4, 5];
echo array_unshift($arr, 0) . array_push($arr, 6);
var_dump($arr);
