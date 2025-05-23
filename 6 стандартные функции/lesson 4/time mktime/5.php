<?php
    $arr = time();
    $result = mktime(7,23, 48, 5, 13, 2025);
    $sum = ($arr - $result) / 60 / 60;
    echo $sum;