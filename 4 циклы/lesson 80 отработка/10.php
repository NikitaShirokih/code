<?php
    $arr = [2, 5, 6, 2];
    $sum = 0;
    foreach ($arr as $number) {
        $sum += $number / 4;
    }
    echo $sum;