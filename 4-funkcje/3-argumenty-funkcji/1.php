<?php
/*
Task: 1. Przygotuj funkcję showName wyświetlającą imię przekazane do niej jako argument.
Lesson: https://www.phpdevs.pl/funkcje/3-argumenty-funkcji
*/

function showName(string $name)
{
    echo 'Your name is: '.$name;
}

showName('Jan');
