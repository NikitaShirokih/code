<?php
$arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];

function func($arr) {
    $str = '';
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $str .= func($elem);
        } else {
            $str .= $elem;
        }
    }
    return $str;
}
var_dump(func(['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]]));