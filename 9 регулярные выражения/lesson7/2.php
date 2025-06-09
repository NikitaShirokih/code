<?php
$str = 'a1a a3a a7a a9a aba';
$res = preg_replace('#a[1,8-9]a#', '!!!', $str);
echo $res;