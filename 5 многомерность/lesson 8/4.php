<?php
$arr = [];
$key = 1;
for ($i = 0; $i < 4 ; $i++) {
    $subarr = [];
    for ($j = 0; $j < 2; $j++) {
        $subarr[] = $key;
        $key++;
    }
    $arr[] = $subarr;
}
var_dump($arr);