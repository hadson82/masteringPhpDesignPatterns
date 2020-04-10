<?php

use App\BehavioralDesignPatterns\ChainOfResponsibility\AssociatePurchaser;
use App\BehavioralDesignPatterns\ChainOfResponsibility\BoardPurchaser;
use App\BehavioralDesignPatterns\ChainOfResponsibility\DirectorPurchaser;
use App\BehavioralDesignPatterns\ChainOfResponsibility\ManagerPurchaser;

require_once __DIR__. "/../../../vendor/autoload.php";

$associate = new AssociatePurchaser();
$manager = new ManagerPurchaser();
$director = new DirectorPurchaser();
$board = new BoardPurchaser();

$associate->setNextPurchaser($manager);
$manager->setNextPurchaser($director);
$director->setNextPurchaser($board);
$associate->buy(12000);