<?php

use App\StructuralDesignPatterns\ProxyPattern\AnimalFeederProxy;

require_once __DIR__ . "/../../../vendor/autoload.php";

$felix = new AnimalFeederProxy('Cat', 'Felix');
echo $felix->displayFood(1);
echo "<br />";
echo $felix->dropFood(1, true);
echo "<br />";

$brain = new AnimalFeederProxy('Dob', 'Brian');
echo $brain->displayFood(1);
echo "<br />";
echo $brain->dropFood(1, true);