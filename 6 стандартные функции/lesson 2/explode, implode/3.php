<?php
    $date = 'год-месяц-день';
    $arr = explode('-', $date);
    echo $arr[2] . '.' . $arr[1] . '.' . $arr[0];