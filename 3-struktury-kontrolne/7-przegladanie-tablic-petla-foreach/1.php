<?php
/*
Task: 1. W tablicy $people podane są dane trzech uczniów: imię i nazwisko oraz rok urodzenia. Wypisz imiona i nazwiska wszystkich uczniów oraz ich łączny wiek. Skorzystaj z pętli foreach.
Uwaga! Wiek, czyli informacja ile mają aktualnie lat. Informacji tej nie ma w tablicy, należy ją obliczyć.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/7-przegladanie-tablic-petla-foreach
*/

$people = [
    ['name' => 'Jan Kowalski', 'birth' => 1980],
    ['name' => 'Piotr Nowak', 'birth' => 1994],
    ['name' => 'Anna Kowalczyk', 'birth' => 1982]
];
$currentYear = 2017;

$age = 0;
foreach ($people as $person) {
    echo $person['name'].', ';
    $age += $currentYear - $person['birth'];
}
echo 'Total age: '.$age;
