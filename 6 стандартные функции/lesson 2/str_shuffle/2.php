<?php
    $arr = 'abcdefqweghsfgh';
    $str = str_shuffle($arr);
    $result = substr($str,0, 6);
    echo $result;