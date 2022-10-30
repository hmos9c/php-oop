<?php

require_once "data/21-Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Sanas");
var_dump($company);

$company->programmer = new BackendProgrammer("Sanas");
var_dump($company);

$company->programmer = new FrontendProgrammer("Sanas");
var_dump($company);

sayHelloProgrammer(new Programmer("Sanas"));
sayHelloProgrammer(new BackendProgrammer("Sanas"));
sayHelloProgrammer(new FrontendProgrammer("Sanas"));