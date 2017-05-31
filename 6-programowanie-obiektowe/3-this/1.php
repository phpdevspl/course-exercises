<?php
/*
Task: 1. Stwórz klasę Person z prywatnymi właściwościami name oraz city. Przygotuj również metody getName() i getCity() zwracające te dane.
Lesson: https://www.phpdevs.pl/programowanie-obiektowe/3-this
*/

class Person
{
    private $name = 'Jan Kowalski';
    private $city = 'Warszawa';

    public function getName(): string
    {
        return $this->name;
    }

    public function getCity(): string
    {
        return $this->city;
    }
}

$person = new Person();
echo $person->getName();
echo $person->getCity();
