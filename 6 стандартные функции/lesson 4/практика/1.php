<?php
$daysLeft = (strtotime('first day of january next year') - time()) / 86400;
echo "До Нового Года осталось $daysLeft дней!";
?>