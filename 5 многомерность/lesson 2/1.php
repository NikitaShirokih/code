<?php
$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$sum = 0;
foreach ($arr as $two) {
    foreach ($two as $three) {
        foreach ($three as $four) {
            $sum += $four;
        }
    }
}
echo $sum;