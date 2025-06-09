<?php
$str = 'ave a#a a2a a$a a4a a5a a-a aca';
$res = preg_replace('#a\sa#', '!', $str);
echo $res;