<?php
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, ['a', 'b']);
array_splice($arr, -1, 0, ['c']);
array_splice($arr, count($arr), 0, ['e']);
print_r($arr);