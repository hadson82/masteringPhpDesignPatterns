<?php


namespace App\BehavioralDesignPatterns\StrategyDesignPattern;


class RaiseNumber
{

    private $strategy;

    public function __construct(Power $strategy)
    {
        $this->strategy = $strategy;
    }

    public function raise(int $number)
    {
        return $this->strategy->raise($number);
    }

}