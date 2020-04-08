<?php


use App\Strategy\Cube;
use App\Strategy\RaiseNumber;
use App\Strategy\Square;

require_once __DIR__ . "/../../vendor/autoload.php";


if(isset($_GET['n'])){
    $number = $_GET['n'];
}else {
    $number = 0;
}

if ($number < 5) {
    $power = new Cube();
}else {
    $power = new Square();
}

$processor = new RaiseNumber($power);

var_dump($processor->raise($number));