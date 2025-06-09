<?php
$str = 'aa aba abba abbba abbbba abbbbba';
$pattern = '/ab{2,4}a/';
$result = preg_replace($pattern, 'MATCH', $str);
echo $result;