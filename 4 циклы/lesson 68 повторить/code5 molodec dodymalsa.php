<?php
    $dayWeek = ['пн','вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
    $day = 'ср';
    foreach ($dayWeek as $key => $day) {
        if($day === "ср") {
            echo "<b>$day</b><br>";
        } else {
            echo "$day<br>";
        }
    }