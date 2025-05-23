<?php
    $num = 12345;
    $res = (string) $num;

    if ($res[0] == 1) {
        echo '+';
    } else {
        echo '-';
    }