<?php
$str = 'aba aea afa aha aga';
$res = preg_replace('#a[g-i]a#', '!!!', $str);
echo $res;