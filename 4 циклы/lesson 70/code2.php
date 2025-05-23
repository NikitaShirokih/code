<?php
$arr = [2, 5, 9, 3, 1, 4];
$sum = 0;
foreach ($arr as $num) {
    if ($num % 2 == 1) {
        $sum += $num;
    }
}
echo $sum;