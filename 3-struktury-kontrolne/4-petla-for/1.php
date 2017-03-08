<?php
/*
Task: 1. Dana jest liczba 50. Zmniejszaj ją o 8 i wypisuj pomniejszoną wartość, ale tylko do momentu gdy liczba ta będzie większa od 0. Użyj pętli for.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/4-petla-for
*/

for ($number = 50; $number > 0; $number -= 8) {
    echo $number.' ';
}
