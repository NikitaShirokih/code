<?php
    $arr = [1, 2, 3];
    $sum = 0;
    foreach ($arr as $number) {
        $sum += $number ** 2;
    }
    echo $sum;