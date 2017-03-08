<?php
/*
Task: 1. Przygotuj skrypt sprawdzający czy osoba, której wiek podany zostanie w zmiennej $age, jest pełnoletnia. Jeśli tak, wyświetl komunikat "Adult!".
Lesson: https://www.phpdevs.pl/struktury-kontrolne/1-instrukcje-warunkowe
*/

$age = 22;

if ($age >= 18) {
    echo 'Adult!';
}
