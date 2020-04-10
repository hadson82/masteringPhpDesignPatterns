<?php

use App\BehavioralDesignPatterns\TemplateMethod\MeatballPasta;
use App\BehavioralDesignPatterns\TemplateMethod\VeganPasta;

require_once __DIR__. "/../../../vendor/autoload.php";

var_dump("Meatball pasta");
$dish = new MeatballPasta();
$dish->cook();

var_dump("");
var_dump("Vegan pasta");
$dish = new VeganPasta(true);
$dish->cook();
