<?php
$reg = '#^[\w-]+\.[a-z]{2,}$#';

$arr[] = 'site.ru';          // +
$arr[] = 'site.com';         // +
$arr[] = 'my-site.com';      // +
$arr[] = 'my-cool-site.com'; // +
$arr[] = 'my_site.com';      // +
$arr[] = 'site123.com';      // +
$arr[] = 'site.travel';      // +
$arr[] = 'si$te.com';        // -
$arr[] = 'site.r';           // -

foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . "<br>";
}