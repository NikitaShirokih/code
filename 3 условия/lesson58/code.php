<?php
    $min = 20;
    if($min >= 0 and $min <= 19) {
        echo '1 треть часа';
    }
    if($min >= 20 and $min <= 39) {
        echo '2 треть часа';
    }
    if($min >= 40 and $min <= 59) {
        echo '3 треть часа';
    }