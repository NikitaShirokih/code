<?php
function add($num) {
    if ($num <= 9) {
        return '0' . $num;
    }
    return $num;
}
echo add(5);
