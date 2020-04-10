<?php

namespace App\BehavioralDesignPatterns\TemplateMethod;

abstract class Pasta
{

    private $cheese;

    public function __construct(bool $cheese = true)
    {
        $this->cheese = $cheese;
    }

    public function cook()
    {
        var_dump('Cooked pasta.');

        $this->boilPasta();
        $this->addSauce();
        $this->addMeat();

        if ($this->cheese) {
            $this->addCheese();
        }
    }

    public function boilPasta(): bool
    {
        return true;
    }

    public abstract function addSauce():bool;

    public abstract function addMeat(): bool;

    public abstract function addCheese(): bool;
}