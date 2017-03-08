<?php
/*
Task: 1. Zmień ćwiczenie 1. z poprzedniej lekcji tak, aby użyć pętli while.
"Dana jest liczba 50. Zmniejszaj ją o 8 i wypisuj pomniejszoną wartość, ale tylko do momentu gdy liczba ta będzie większa od 0."
Lesson: https://www.phpdevs.pl/struktury-kontrolne/5-petla-while
*/

$number = 50;
while ($number > 0) {
    echo $number.' ';
    $number -= 8;
}
