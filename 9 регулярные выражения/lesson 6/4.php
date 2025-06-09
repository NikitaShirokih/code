<?php
$str = 'avb a1b a2b a3b a4b a5b abb acb';
$res = preg_replace('#a\Db#', '!!!', $str);
echo $res;