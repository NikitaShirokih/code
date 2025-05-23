<?php
    $arr = [];
    $sum = 1;
    for ($i = 0; $i < 2; $i++) {
        $block = [];
        for ($j = 0; $j < 2; $j++) {
            $subarr = [];
            for ($k = 0; $k < 2; $k++) {
                $subarr[] = $sum;
                $sum++;
            }
            $block[] = $subarr;
        }
        $arr[] = $block;
    }
    var_dump($arr);