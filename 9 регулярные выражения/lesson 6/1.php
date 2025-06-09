<?php
$str = 'a1a a2a a3a a4a a5a aba aca';
$res = preg_replace('#\D+#', '!!!', $str);
echo $res;