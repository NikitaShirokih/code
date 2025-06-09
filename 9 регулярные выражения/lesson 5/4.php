<?php
$str = 'aba accca azzza wwwwa';
$res = preg_replace('#a.+?a#', '!!!', $str);
echo $res;