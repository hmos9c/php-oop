<?php

require_once "data/1-Person.php";

$person = new Person("Sanas", "Jakarta");
$person->name = "Sanas";
$person->address = "Jakarta";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Akmal", null);
$person2->name = "Akmal";
$person2->address = null;

var_dump($person2);

// error
// $person2->name = [];
