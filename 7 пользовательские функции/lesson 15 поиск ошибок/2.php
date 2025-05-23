<?php
function sum($arr) {
    $res = 0;

    foreach ($arr as $elem) {
        $res += $elem;
    }
    return $res;
}

echo sum([1, 2, 3, 4, 5]);
?>