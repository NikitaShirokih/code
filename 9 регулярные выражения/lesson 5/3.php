<?php
$str = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace('#ab{4,}a#', '!!!', $str);
echo $res;