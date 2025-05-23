<?php
    $number = 123456;
    $str = (string) $number;
    $num1 = $str[0] + $str[1] + $str[2];
    $num2 = $str[3] + $str[4] + $str[5];
    if ($num1 == $num2) {
        echo 'числа равны';
    } else {
        echo 'чила не равны';
    }
