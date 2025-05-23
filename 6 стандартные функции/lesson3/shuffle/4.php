<?php
    $arr = range('a','z');
    shuffle($arr);
    $result = substr(implode('', $arr), 0, 6);
    var_dump($result);
