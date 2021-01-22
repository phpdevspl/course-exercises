<?php
/*
Task: 2. Przy użyciu pętli foreach wyświetl imiona użytkowników z tablicy $users. Gdy wystąpi imię "Marek" przerwij wykonywanie pętli.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/8-sterowanie-petlami
*/

$users = ['Jan', 'Jakub', 'Marek', 'Piotr'];

foreach ($users as $user) {
    if ($user === 'Marek') {
        break;
    }
    echo $user . ' ';
}

