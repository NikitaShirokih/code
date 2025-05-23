<?php
    $numbers = [1, 3, 3, 4, -1, 3, -2];
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number < 0) {
            break;
        }
        $sum += $number;
    }
    echo $sum;