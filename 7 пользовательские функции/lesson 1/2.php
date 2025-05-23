<?php
function summa100() {
    $sum = 0;
    for ($i = 1; $i < 100; $i++) {
        $sum += $i;
    }
    echo "сумма чисел" . $sum;
}
summa100();