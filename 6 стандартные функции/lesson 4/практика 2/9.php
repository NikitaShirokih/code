<?php
    $number = range(1,26);
    $string = range("a","z");
    $result = array_combine($string, $number);
    print_r($result);
