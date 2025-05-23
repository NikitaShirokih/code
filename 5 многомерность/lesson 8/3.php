<?php
    $arr = [];
    for ($i = 0; $i <= 3; $i++) {
        $block =[];
        for ($j = 0; $j <= 2; $j++) {
            $row =[];
            for ($k = 1; $k <= 5; $k++) {
                $row[] = $k;
            }
            $block[] = $row;
        }
        $arr[] = $block;
    }
    var_dump($arr);