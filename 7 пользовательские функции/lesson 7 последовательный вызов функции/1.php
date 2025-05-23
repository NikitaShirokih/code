<?php
function square($num) {
    return $num * $num;
}

function sum($num1, $num2) {
    return $num1 + $num2;
}
$res = sum(square(2),  square(3));
echo $res;