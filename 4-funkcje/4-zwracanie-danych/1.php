<?php
/*
Task: 1. Stwórz funkcję isAdult zwracającą true, gdy osoba o wieku przesłanym przez argument jest dorosła lub false jeśli nie.
Lesson: https://www.phpdevs.pl/funkcje/4-zwracanie-danych
*/

function isAdult(int $age)
{
    return $age >= 18;
}

var_dump(isAdult(20));
