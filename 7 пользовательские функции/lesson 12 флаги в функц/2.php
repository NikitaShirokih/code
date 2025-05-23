<?php
    function allDigitsOdd($number): bool
{
    // Преобразуем число в строку, чтобы работать с каждой цифрой
    $digits = str_split((string)abs($number));

    foreach ($digits as $digit) {
        // Проверяем, что цифра нечётная (1, 3, 5, 7, 9)
        if ($digit % 2 === 0) {
            return false;
        }
    }

    return true;
}