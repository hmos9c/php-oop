<?php

require_once "data/49-Food.php";
require_once "data/25-Animal.php";
require_once "data/47-AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food());
