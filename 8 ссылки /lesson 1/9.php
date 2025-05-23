<?php
$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];

function func(&$array) {
    foreach ($array as &$elem) {
        if (is_array($elem)) {
            func($elem);
        } else {
            $elem = $elem ** 2;
        }
    }
    unset($elem);
}
func($arr);
print_r($arr);
