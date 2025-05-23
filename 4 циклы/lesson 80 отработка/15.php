<?php
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $string = [];
    $number = [];
    foreach ($arr as $str => $sum) {
    $string[] = $str;
    $number[] = $sum;
    }
    var_dump($string);
    var_dump($number);
