<?php
    function sum($arr) {
        if ($arr > 0) {
            echo '+++';
        } elseif ($arr < 0) {
            echo '---';
        }
    }
    sum(2);