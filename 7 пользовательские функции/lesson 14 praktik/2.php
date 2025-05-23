<?php
function func($arr1, $arr2) {
    $res1 = 0;

    foreach ($arr1 as $elem) {
        $res1 += $elem;
    }

    $res2 = 0;

    foreach ($arr2 as $elem) {
        $res2 += $elem;
    }

    return $res1 / $res2;
}
 var_dump(func(4, 4));