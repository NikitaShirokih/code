<?php
    $arr = "https://youtube.com";
        if (substr($arr, 0,7) === 'http://' or substr($arr, 0,8) === 'https://') {
            echo "начинается с 'http://'";
    } else {
            echo "Строка начинается не с 'http://'";
        }