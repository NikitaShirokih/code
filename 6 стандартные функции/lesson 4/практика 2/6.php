<?php
    $number = 25;
    $sum = 0;
    $string = str_split((string)$number);
    foreach ($string as $value) {
        $sum +=(int)$value;
    }
    echo $sum;

