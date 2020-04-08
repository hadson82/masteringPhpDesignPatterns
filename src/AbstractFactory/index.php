<?php

use App\AbstractFactory\SFToyFactory;
use App\AbstractFactory\UKToyFactory;

require_once __DIR__."/../../vendor/autoload.php";

$sanFranciscoFactory = new SFToyFactory();
var_dump($sanFranciscoFactory->makeMaze());
echo "<br />";
var_dump($sanFranciscoFactory->makePuzzle());
echo "<br /><br />";

$britishToyFactory = new UKToyFactory();
var_dump($britishToyFactory->makeMaze());
echo "<br />";
$britishToyFactory = new UKToyFactory();
var_dump($britishToyFactory->makePuzzle());

