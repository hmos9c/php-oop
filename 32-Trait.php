<?php

require_once "data/31-SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Ardi");
$person->hello("Akmal");

$person->name = "Sanas";
var_dump($person);

$person->run();