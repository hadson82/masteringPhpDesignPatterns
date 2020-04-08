<?php

use App\StructuralDesignPatterns\ClassAdapter\ATM;
use App\StructuralDesignPatterns\ClassAdapter\ATMWithPhoneTopUp;

require_once __DIR__ . "/../../../vendor/autoload.php";

$atm = new ATM(500.00);
$atm->withdraw(50);
echo $atm->getBalance();
echo "<br />";

$adaptedATM = new ATMWithPhoneTopUp(500.00);
echo "Top-up code: " . $adaptedATM->getTopUp(50, time());
echo "<br />";
echo $adaptedATM->getBalance();


