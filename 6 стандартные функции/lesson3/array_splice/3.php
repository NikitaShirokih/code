<?php
    $arr = [1, 2, 3, 4, 5];
    array_splice($arr, 2, 0, ['a', 'b', 'c']);
    print_r($arr);