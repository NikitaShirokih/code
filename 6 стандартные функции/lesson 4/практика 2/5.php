<?php
    $arr = [];
    for ($i = 1; $i <= 10; $i++) {
        $arr[] = $i;
    }
    shuffle($arr);
    print_r($arr);