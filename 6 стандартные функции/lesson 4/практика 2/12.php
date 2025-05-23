<?php
    $arr = [];
    $result = [];
    for ($i = 1; $i <= 9; $i++) {
        $arr[] = $i;
        $result = array_chunk($arr, 3);
    }

    print_r($result);