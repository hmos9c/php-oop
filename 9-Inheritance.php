<?php

require_once "data/8-Manager.php";

$manager = new Manager();
$manager->name = "Akmal";
$manager->sayHello("Ardi");

$vp = new VicePresident();
$vp->name = "Sanas";
$vp->sayHello("Ardi");
