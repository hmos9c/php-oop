<?php

require_once "data/41-Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Sanas";
$student1->value = 100;
$student1->setSample("SAMPLE");

var_dump($student1);
