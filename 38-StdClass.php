<?php

$array = [
    "firstName" => "Sanas",
    "lastName" => "Febriyan"
];

$object = (object)$array;

var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/1-Person.php";

$person = new Person("Sanas", "Jakarta");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);