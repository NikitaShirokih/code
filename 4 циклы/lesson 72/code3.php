<?php
$sum = 0;
$number = 0;
$str = 100;
while ($sum <= $str) {
    $number++;
    $sum += $number;
}
echo $sum;