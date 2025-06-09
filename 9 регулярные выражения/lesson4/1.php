<?php
$str = 'a.a aba aea';
$res = preg_replace('#a\.a#', '!!!', $str);
echo $res;