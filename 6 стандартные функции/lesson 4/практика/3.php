<?php
    $date = time();
    $sum = strtotime("-100 day", $date);
    echo date('w' ,$sum);
