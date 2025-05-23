<?php
    $date = '2025-12-31';
    $result = strtotime($date);
    $sum = date('d-m-Y', $result);
    echo $sum;
