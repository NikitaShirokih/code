<?php
$arr = [10, 20, 30, 40, 21, 32, 51];
$sum = 0;
foreach ($arr as $number) {
    $nomer = (int)((string)$number)[0];
    if ($nomer == '1' or $nomer == '2') {
        $sum += $number;
        echo $number . " ";
    }
}
echo $sum;