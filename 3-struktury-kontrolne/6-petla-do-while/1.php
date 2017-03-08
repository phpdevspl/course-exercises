<?php
/*
Task: 1. Przy użyciu jednej pętli do-while wypisz wszystkie liczby nieparzyste z zakresów 20-40 i 60-80.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/6-petla-do-while
*/

$number = 20;
do {
    if ($number % 2 === 1) {
        if ($number <= 40 || $number >= 60) {
            echo $number.' ';
        }
    }
    $number++;
} while ($number <= 80);
