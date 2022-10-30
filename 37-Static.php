<?php

require_once "helper/36-MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Sanas Febriyan";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;