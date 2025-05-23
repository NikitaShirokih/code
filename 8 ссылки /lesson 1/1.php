<?php
$arr = [1, 2, 3, 4, 5];

foreach ($arr as &$elem) {
   $elem = $elem ** 2;
}

var_dump($arr);
?>