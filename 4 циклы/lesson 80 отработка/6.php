<?php
    $arr = [1, 2, 5, 22, 13, 8, 9];
    foreach ($arr as $number) {
        if ($number > 0 and $number <= 10) {
            echo $number;
        }
    }