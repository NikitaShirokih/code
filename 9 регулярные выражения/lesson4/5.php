<?php
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
$res = preg_replace('#\*+q+\+#', '!!!', $str);
echo $res;