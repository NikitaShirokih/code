<?php
    $arr = [1,2,3,4,5];
    $sum = [];
    foreach ($arr as $value) {
        $arr = $value **2;
        var_dump($arr);
    }