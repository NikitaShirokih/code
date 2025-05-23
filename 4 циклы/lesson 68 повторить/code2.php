<?php
    $arr = [1, 2, 3, -2, -3, -1];
    $sum = 0;
    foreach ($arr as $number => $sum) {
        if ($sum >= 0) {
            echo $sum;
        }
    }