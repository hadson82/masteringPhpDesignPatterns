<?php

namespace App\StructuralDesignPatterns\ProxyPattern;

interface AnimalFeeder
{
    public function __construct(string $petName);

    public function dropFood(int $hungerLevel, bool $water = false): string;

    public function displayFood(int $hungerLevel): string;

}