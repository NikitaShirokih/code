<?php
$str = 'aba aea aca aza axa';
$res = preg_replace('#a[z,c]a#', '!!!', $str);
echo $res;