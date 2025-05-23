<?php
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$result = array_search('-', $arr);
$str = array_splice($arr, 1, 1);
    print_r($arr);