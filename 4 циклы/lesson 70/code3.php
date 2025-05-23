<?php
    $arr = [2, 5, 9, 3, 1, 4];
    $sum = 1;
    foreach ($arr as $num) {
        $sum *= $num;
    }
    echo $sum;