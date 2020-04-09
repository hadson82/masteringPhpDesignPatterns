<?php

use App\BehavioralDesignPatterns\Observer\Feed;
use App\BehavioralDesignPatterns\Observer\Reader;

require_once __DIR__ . "/../../../vendor/autoload.php";

$newspaper = new Feed('Junade.com');

$allen = new Reader('Mark');
$jim = new Reader('Lily');
$linda = new Reader('Caitlin');

// add reader
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);


$newspaper->detach($linda);

$newspaper->breakOutNews('PHP Design Patterns');
