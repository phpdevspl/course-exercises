<?php
/*
Task: 2. Oblicz pole kwadratu o boku długości $side i jeśli będzie równe 25 wypisz na ekranie: "Area: [obliczone pole]".
Lesson: https://www.phpdevs.pl/struktury-kontrolne/1-instrukcje-warunkowe
*/

$side = 5;

$area = $side ** 2;
if ($area === 25) {
    echo 'Area: '.$area;
}
