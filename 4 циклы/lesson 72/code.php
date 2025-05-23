<?php
    $num = [1, 2, 4, 5, 6, 0, 4, 5];
    foreach ($num as $sum) {
        if ($sum == 0) {
            echo "+++";
            break;
        }
    }
    var_dump($sum);