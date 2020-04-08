<?php

use App\LazyInitialization\BurgerLazyLoader;
use App\LazyInitialization\Burger;

require_once __DIR__."/../../vendor/autoload.php";


$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and fries costs: $".$burger->getPrice();
echo "<br/>";
echo "Instances in lazy loader: " . BurgerLazyLoader::getBurgerCount();
echo "<br/>";
echo "<br/>";

$burger = BurgerLazyLoader::getBurger(true, false);
echo "Burger with cheese and no fries costs: $" . $burger->getPrice();
echo "<br/>";
echo "Instances in lazy loader: " . BurgerLazyLoader::getBurgerCount();
echo "<br/>";
echo "<br/>";


$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and fries costs: $".$burger->getPrice();
echo "<br/>";
echo "Instances in lazy loader: " . BurgerLazyLoader::getBurgerCount();
echo "<br/>";
echo "<br/>";