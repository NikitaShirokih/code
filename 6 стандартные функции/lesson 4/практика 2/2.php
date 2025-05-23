<?php
    $arr = [];
    $result = [];
    for ($i = 1; $i <= 100; $i++) {
        $arr[] = $i;
    }
    $result = array_sum($arr);
    var_dump($result);