<?php
$str = '[abc] {abc} abc (abc) [abc]';
$res = preg_replace('#\[.*?\]#', '!!!', $str );
echo $res;