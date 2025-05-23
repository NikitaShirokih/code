<?php
    $arr = [1, 2, 3, 4];
    $flag = true;
    foreach ($arr as $sum) {
        if ($sum <= 1) {
            $flag = true;
            break;
        }
    }
    if ($flag === true) {
        echo '+';
    } else {
        echo '-';
    }