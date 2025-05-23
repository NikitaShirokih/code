<?php
    $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
    $number1 = 0;
    $number2 = 0;
    $number3 = 0;
    foreach ($arr as $sum => $key) {
        $number1 += $sum;
        $number2 += $key;
        if ($number3 = $number1 / $number2) {
        }
    }
echo $number3;