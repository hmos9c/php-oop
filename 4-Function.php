<?php

require_once "data/1-Person.php";

$sanas = new Person("Sanas", "Jakarta");
$sanas->name = "Sanas";
$sanas->sayHello("Akmal");

$ardi = new Person("Ardi", "Cirebon");
$ardi->name = "Ardi";
$ardi->sayHello(null);

$sanas->info();
$ardi->info();