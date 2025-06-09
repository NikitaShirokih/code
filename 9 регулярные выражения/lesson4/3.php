<?php
$str = '23 2+3 2++3 2+++3 345 567';
$res = preg_replace('#2\++3#', '!!!', $str);
echo $res;