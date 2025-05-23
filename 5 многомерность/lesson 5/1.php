<?php
    $arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
    $sum = 0;
        foreach ($arr as $value) {
            foreach ($value as $item) {
                $sum += $item;
            }
        }
echo $sum;