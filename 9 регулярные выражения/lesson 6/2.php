<?php
$str = 'a1a a22a a333a a4444a a55555a aba aca';
$res = preg_replace('#\d+#', '!!!', $str);
echo $res;