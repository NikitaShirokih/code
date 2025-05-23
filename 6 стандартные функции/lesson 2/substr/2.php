<?php
    $arr = "skok.jpg";
    if (substr($arr, -4, ) === ".png" or substr($arr, -4, ) === ".jpg") {
        echo "Строка заканчивается на '.png' или '.jpg'";
    } else {
        echo "строка не заканчивается на '.png'";
    }