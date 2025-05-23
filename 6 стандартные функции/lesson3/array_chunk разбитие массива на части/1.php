<?php
    $arr = range(1, 25);
    $result = array_chunk($arr, 5);
    var_dump($result);