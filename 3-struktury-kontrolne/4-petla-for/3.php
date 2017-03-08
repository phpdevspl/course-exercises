<?php
/*
Task: 3. (Trudniejsze) Wykonaj tabliczkę mnożenia w postaci prostej tabeli. Przykładowy efekt jaki należy uzyskać: http://phpdevs.local/images/struktury-kontrolne/4-exercise3.png
Podpowiedź: należy użyć dwóch pętli for i umieścić jedną wewnątrz drugiej. Przejście do nowej linii w przypadku uruchamiania przez terminal to na przykład stała PHP_EOL, a jeśli kod uruchamiasz poprzez serwer www i przeglądarkę znacznik <br> z HTML.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/4-petla-for
*/

for ($row = 1; $row <= 10; $row++) {
    for ($column = 1; $column <= 10; $column++) {
        echo $row * $column.' | ';
    }
    echo '<br>';
}
