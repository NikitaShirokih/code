<?php
    $arr = [];
    for ($i = 0; $i <= 3; $i++) {
        $text = [];
        for ($j = 0; $j <= 4; $j++) {
            $text[] = 'x';
        }
        $arr[] = $text;
    }
    var_dump($arr);