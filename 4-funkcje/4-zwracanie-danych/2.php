<?php
/*
Task: 2. Przygotuj funkcję rectangleArea obliczającą pole prostokąta o bokach $sideA i $sideB, przekazanych przez argumenty. Zwróć obliczone pole z funkcji i wyświetl. Nadaj odpowiednie typy dla argumentów oraz zwracanej wartości, zakładając, że będziemy operowali tylko na liczbach całkowitych.
Lesson: https://www.phpdevs.pl/funkcje/4-zwracanie-danych
*/

$sideA = 8;
$sideB = 5;

function rectangleArea(int $sideA, int $sideB): int
{
    return $sideA * $sideB;
}

echo 'Rectangle area: '.rectangleArea($sideA, $sideB);
