<?php

use App\StructuralDesignPatterns\Facade\ToyShop;

require_once __DIR__ . "/../../../vendor/autoload.php";

$childrensToyFactory = new ToyShop('1 Factory Lane, Oxfordshire', '07999999999', 5);
$childrensToyFactory->processOrder('8 Midsummer Boulevard', '07123456789');