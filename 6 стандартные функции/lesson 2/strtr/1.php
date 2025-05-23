<?php
    $str = 'aaabbbccc';
    echo strtr($str, 'abc', '123');
    echo strtr($str, ['a' => '1', 'b' => '2', 'c' => '3'] );