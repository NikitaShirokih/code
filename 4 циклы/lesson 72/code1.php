<?php
    $arr = [1, 4, -66, 3, -1, -4, 3, 4];
    foreach ($arr as $sum => $value) {
        if ($value == 3) {
            echo 'pozition' . $sum;
            break;
        }
    }