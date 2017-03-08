<?php
/*
Task: 2. Korzystając z jednej pętli for oblicz sumę wszystkich liczb parzystych z zakresu od 0 do 100 i wyświetl ją na ekranie. Dodatkowo policz ilość liczb parzystych większych od 50.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/4-petla-for
*/

$evenSum = 0;
$evenCount = 0;
for ($number = 0; $number <= 100; $number++) {
    if ($number % 2 === 0) {
        $evenSum += $number;
        if ($number > 50) {
            $evenCount++;
        }
    }
}
echo 'Sum even numbers: '.$evenSum;
echo 'Even numbers greater than 50: '.$evenCount;
