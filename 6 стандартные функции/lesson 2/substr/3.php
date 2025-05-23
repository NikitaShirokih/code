<?php
    $text = "hello WORLD";
    if (strlen($text) > 5) {
        $texting = substr($text, 0, 5) . '...';
        echo $texting;
    } else {
        echo $text;
    }