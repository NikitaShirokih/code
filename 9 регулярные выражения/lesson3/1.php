<?php
$str = 'ab abab abab abababab abea';
$res = preg_replace('#ab(ab)+ab#', '!!!', $str);
echo $res;