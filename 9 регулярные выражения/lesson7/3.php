<?php
$str = 'aba aea afa aha aga';
$res = preg_replace('#a[h-z]a#', '!!!', $str);
echo $res;