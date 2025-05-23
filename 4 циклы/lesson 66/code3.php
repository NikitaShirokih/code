<?php
    $i = 1;
    $iteration = 0; // задать кол-вл итераций

    while ($i <= 1000) {
        $i *= 3;
        $iteration++;
    }
    echo $i;
    echo $iteration; // не забыть вывести