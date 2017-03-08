<?php
/*
Task: 1. Przygotuj prosty kalkulator wykorzystujący switch. Wykonaj działanie określone w zmiennej $operation (+, -, *, /) na liczbach $number1 i $number2 oraz wyświetl jego wynik. W przypadku niewybrania żadnego z podanych działań wyświetl komunikat "Invalid operation".
Lesson: https://www.phpdevs.pl/struktury-kontrolne/3-switch
*/

$operation = '*';
$number1 = 6;
$number2 = 4;

switch ($operation) {
    case '+':
        echo $number1 + $number2;
        break;
    case '-':
        echo $number1 - $number2;
        break;
    case '*':
        echo $number1 * $number2;
        break;
    case '/':
        echo $number1 / $number2;
        break;
    default:
        echo 'Invalid operation';
        break;
}
