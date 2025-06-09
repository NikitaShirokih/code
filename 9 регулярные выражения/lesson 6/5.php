<?php
$str = 'ave a#b a2b a$b a4b a5b a-b acb';
$res = preg_replace('#a\S?b#', '!!!', $str);
echo $res;
