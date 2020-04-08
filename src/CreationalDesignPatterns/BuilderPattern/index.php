<?php

use App\CreationalDesignPatterns\BuilderPattern\Pizza;
use App\CreationalDesignPatterns\BuilderPattern\PizzaBuilder;

require_once __DIR__ . "/../../../vendor/autoload.php";

$pizzaRecipe = (new PizzaBuilder(9))
    ->cheese(true)
    ->pepperoni(false)
    ->bacon(true)
    ->build();

$order = new Pizza($pizzaRecipe);
echo $order->show();