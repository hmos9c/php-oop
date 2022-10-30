<?php

require_once "data/25-Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();

$dog = new Dog();
$dog->name = "Doggy";
$dog->run();
