<?php
$month = 3;
switch($month) {
    case 12;
    case 1:
    case 2:
        echo 'zima';
        break;
    case 3;
    case 4:
    case 5:
        echo 'vesna';
        break;
    case 6;
    case 7:
    case 8:
        echo 'leto';
        break;
    case 9;
    case 10:
    case 11:
        echo 'osen';
        break;
    default:
        echo 'неверно число';
}