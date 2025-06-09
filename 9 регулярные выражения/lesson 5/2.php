<?php
$str = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace('#ab{1,3}a#', '!!!', $str );
echo $res;