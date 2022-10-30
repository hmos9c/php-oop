<?php

$matches = [];
$result = preg_match_all("/sanas|akmal|ardi/i", "Sanas Febriyan", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Sanas Febriyan,hmos9c");

var_dump($result);