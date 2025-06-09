<?php
$str = 'aa aba abba abbba abca abea';
$res = preg_replace('#ab+a#', '!!!', $str);
echo $res;