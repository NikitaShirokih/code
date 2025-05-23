<?php
$num = 1; // такие структуры кода, лучше писать через if

switch ($num) {
    case 1:
    case 2:
        $res = 'a';
        break;
    case 3:
        $res = 'b';
        break;
}

echo $res;
?>