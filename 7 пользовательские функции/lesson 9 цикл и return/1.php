<?php
function func($num) {
    $sum = 0;

    for ($i = 1; $i <= 5; $i++) {
        $sum += $i;

    }
    return $sum;
}

echo func(5);
?>