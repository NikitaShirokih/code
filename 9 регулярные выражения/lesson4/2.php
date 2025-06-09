<?php
$str = '2+3 223 2223';
$res = preg_replace('#2\+3#', '!!!', $str);
echo $res;