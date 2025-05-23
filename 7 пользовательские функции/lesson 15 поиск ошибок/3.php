<?php

function func($arr) {
    $arr = [1, 2, 3, 4, 5];
    $res = 0;

    foreach ($arr as $elem) {
        $res += $elem;
    }

    echo $res;
}
echo func(1);
