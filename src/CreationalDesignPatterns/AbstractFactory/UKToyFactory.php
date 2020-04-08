<?php


namespace App\CreationalDesignPatters\AbstractFactory;





use App\CreationalDesignPatters\AbstractFactory\Toys\UKMazeToy;
use App\CreationalDesignPatters\AbstractFactory\Toys\UKPuzzleToy;

class UKToyFactory implements ToyFactory
{
    private $location = "London";

    function makeMaze()
    {
        return new UKMazeToy;
    }

    function makePuzzle()
    {
        return new UKPuzzleToy;
    }
}