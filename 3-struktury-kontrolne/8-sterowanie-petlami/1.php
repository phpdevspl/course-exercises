<?php
/*
Task: 1. Wykorzystując dowolną pętlę oraz continue, przygotuj skrypt, który zsumuje wartość liczb nieparzystych z zakresu od 1 do 20.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/8-sterowanie-petlami
*/

$sum = 0;
for ($number = 1; $number <= 20; $number++) {
    if ($number % 2 === 0) {
        continue;
    }
    $sum += $number;
}
echo $sum;
