<?php


use App\BehavioralDesignPatterns\StrategyDesignPattern\RaiseNumber;
use App\BehavioralDesignPatterns\StrategyDesignPattern\Square;

require_once __DIR__. "/../../../vendor/autoload.php";

if (isset($_GET['n'])) {
    $number = $_GET['n'];
}else {
    $number = 0;
    echo $number;
}

if ($number < 5) {
    $power = new Cube();
} else {
    $power = new Square();
}

$processor = new RaiseNumber($power);

var_dump($processor->raise($number));