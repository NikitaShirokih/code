<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, [0 => "!", 3 => "!!!"]);
print_r($result);