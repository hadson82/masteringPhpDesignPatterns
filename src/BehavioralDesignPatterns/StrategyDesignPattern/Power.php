<?php

namespace App\BehavioralDesignPatterns\StrategyDesignPattern;


interface Power
{
    public function raise(int $number): int;
}