<?php
$arr = [[1, 2], [3, 4], [5, 6]];
$sum = 0;
foreach ($arr as $item) {
    foreach ($item as $value) {
        $sum += $value;
    }
}
    echo $sum;