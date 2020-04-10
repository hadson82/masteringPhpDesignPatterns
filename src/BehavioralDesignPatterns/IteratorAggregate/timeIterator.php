<?php

namespace App\BehavioralDesignPatterns\IteratorAggregate;




use ArrayIterator;
use IteratorAggregate;

class timeIterator implements IteratorAggregate
{


    public function getIterator()
    {
        return new ArrayIterator(array(
            'property1' => 1,
            'property2' => 2,
            'property3' => 3
        ));
    }
}