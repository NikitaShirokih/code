<?php
$lang = 'ru';

switch ($lang) {
    case 'ru':
        echo 'рус';
        break;
    case 'en':
        echo 'англ';
        break;
    case 'de':
        echo 'нем';
        break;
    default:
        echo 'язык не поддерживается';
        break;
}
?>