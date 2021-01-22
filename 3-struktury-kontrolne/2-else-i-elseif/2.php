<?php
/*
Task: 2. Podziel ilość osób $people na 4-osobowe zespoły.
- Jeżeli ilość osób będzie odpowiednia wyświetl komunikat: "Teams: [ilość zespołów]".
- Jeśli tylko jedna osoba pozostanie bez zespołu, wyświetl sam komunikat "Too few people!".
- W sytuacji gdy zabraknie miejsca dla większej ilości ludzi, wypisz: "Missing: [ilość brakujących osób do pełnego zespołu]".
Użyj elseif. Podpowiedź: warto użyć operatora modulo.
Lesson: https://www.phpdevs.pl/struktury-kontrolne/2-else-i-elseif
*/

$people = 34;

$inTeam = 4;
$withoutTeam = $people % $inTeam;
if ($withoutTeam === 0) {
    echo 'Teams: ' . ($people / $inTeam);
} elseif ($withoutTeam === 1) {
    echo 'Too few people!';
} else {
    echo 'Missing: ' . ($inTeam - $withoutTeam);
}

