<?php
$str = '23 2+3 2++3 2+++3 445 677';
$res = preg_replace('#2\+*3#', '!!!', $str);
echo $res;