<?php
    $date = date_create('2025-12-31');
    date_modify($date, '2 day 1 month 3 day 1 year -3 day');
    echo date_format($date, 'Y-m-d');