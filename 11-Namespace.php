<?php

namespace {

    require_once "data/10-Conflict.php";
    require_once "data/12-Helper.php";

    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();

}