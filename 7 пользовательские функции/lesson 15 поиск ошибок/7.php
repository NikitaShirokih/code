<?php
function isPrime($num) {
    if ($num <= 1) return false;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
var_dump(isPrime(13));
var_dump(isPrime(12));