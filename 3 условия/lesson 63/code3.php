<?php
    $number = 123;
if ($number >= 100 && $number <= 999) {
    $digit1 = (int)($number / 100);
    $digit2 = (int)(($number % 100) / 10);
    $digit3 = $number % 10;

    $sum = $digit1 + $digit2 + $digit3;
    echo "Сумма цифр числа $number: " . $sum;
} else {
    echo "Число должно быть трехзначным (100-999)";
}