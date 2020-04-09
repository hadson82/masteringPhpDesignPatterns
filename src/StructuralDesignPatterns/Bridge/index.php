<?php

use App\StructuralDesignPatterns\Bridge\Phone;
use App\StructuralDesignPatterns\Bridge\SMS;

require_once __DIR__ . "/../../../vendor/autoload.php";

$phone = new Phone();
$phone->setSender(new SMS());

$phone->send("Hello there!");
