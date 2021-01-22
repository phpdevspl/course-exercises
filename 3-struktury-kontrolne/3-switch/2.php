<?php
/*
Task: 2. (PHP >= 8.0) Przerób kalkulator z ćwiczenia 1. tak, aby użyć match zamiast switch.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/3-switch
*/

$operation = '*';
$number1 = 6;
$number2 = 4;

echo match ($operation) {
    '+' => $number1 + $number2,
    '-' => $number1 - $number2,
    '*' => $number1 * $number2,
    '/' => $number1 / $number2,
    default => 'Invalid operation'
};

