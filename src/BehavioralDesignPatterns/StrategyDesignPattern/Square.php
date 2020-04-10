<?php

namespace App\BehavioralDesignPatterns\StrategyDesignPattern;


class Square implements Power
{

    public function raise(int $number): int
    {
        return pow($number, 2);
    }
}