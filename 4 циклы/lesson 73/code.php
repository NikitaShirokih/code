<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $flag = true;
    foreach ($arr as $string) {
        if ($string === 'c') {
            $flag = true;
            break;
        }
    }
    if ($flag = true) {
        echo '+';
    } else {
        echo '-';
    }