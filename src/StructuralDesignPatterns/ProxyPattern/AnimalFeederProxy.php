<?php


namespace App\StructuralDesignPatterns\ProxyPattern;
use App\StructuralDesignPatterns\ProxyPattern\AnimalFeeders;

class AnimalFeederProxy
{
    protected $instance;

    public function __construct(string $feeder, string $name)
    {
        $class = (new AnimalFeeders) . $feeder;
        $this->instance = new $class($name);
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->instance, $name], $arguments);
    }

}