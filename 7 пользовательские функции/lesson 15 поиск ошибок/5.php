<?php

function sum($arr) {
    $arr = ([1, 2, 3, 4, 5]);
    $sum = 0;

		foreach ($arr as $elem) {
            $sum += $elem;
        }
        return $sum;
	}
    echo sum(2);
