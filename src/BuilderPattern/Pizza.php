<?php

namespace App\BuilderPattern;

class Pizza
{
    private $size;
    private $cheese;
    private $pepperoni;
    private $bacon;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->bacon = $builder->bacon;

    }

    public function show()
    {
        $recipe = $this->size . " inch pizza with the following topping: <br />";
        $recipe .= $this->cheese ? "- cheese<br />" : "";
        $recipe .= $this->pepperoni ? "- pepperoni<br /> " : "";
        $recipe .= $this->bacon ? "- bacon<br />" : "";

        return $recipe;
    }
}