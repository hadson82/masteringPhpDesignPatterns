<?php

use App\BehavioralDesignPatterns\IteratorAggregate\timeIterator;

require_once __DIR__. "/../../../vendor/autoload.php";

$time = new timeIterator();

foreach ($time as $key => $value) {
    var_dump($key, $value);
    echo "<br />";
}