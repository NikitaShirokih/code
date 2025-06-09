<?php
$str = 'ahb acb aeb aeeb adcb axeb';
    $newStr = preg_replace('#a.b#', '!!!', $str);
    echo $newStr;