<?php

use App\StructuralDesignPatterns\ObjectAdapter\Insurance;
use App\StructuralDesignPatterns\ObjectAdapter\InsuranceMarketCompare;

require_once __DIR__ . "/../../../vendor/autoload.php";

$quote = new Insurance(10000, 250);
echo $quote->monthlyPremium();
echo "<br />";

$quote = new InsuranceMarketCompare(10000, 250);
echo $quote->getMonthlyPremium();
echo "<br />";
echo $quote->getAnnualPremium();