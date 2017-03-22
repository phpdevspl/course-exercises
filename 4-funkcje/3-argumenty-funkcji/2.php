<?php
/*
Task: 2. Napisz funkcję prepareCart sprawdzającą, czy klient może złożyć zamówienie o cenie $price, gdy stan jego konta wynosi $money. Zadeklaruj odpowiednie typy dla argumentów. Trzeci argument $promotion powinien być typu logicznego (prawda lub fałsz). Wartością domyślną w przypadku jego nieprzekazania powinno być false. W przypadku gdy promocja ma obowiązywać (true) od łącznej ceny zamówienia ($price) należy odjąć 10. Jeśli klient może dokonać zamówienia wyświetl komunikat "OK".
Lesson: https://www.phpdevs.pl/funkcje/3-argumenty-funkcji
*/

$price = 22.90;
$money = 50;

function prepareCart(float $price, float $money, bool $promotion = false)
{
    if ($promotion) {
        $price -= 10;
    }
    if ($money >= $price) {
        echo 'OK';
    }
}

prepareCart($price, $money);
