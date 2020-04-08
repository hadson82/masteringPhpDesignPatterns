<?php


namespace App\CreationalDesignPatterns\AbstractFactory;



use App\CreationalDesignPatters\AbstractFactory\ToyFactory;
use App\CreationalDesignPatters\AbstractFactory\Toys\SFMazeToy;
use App\CreationalDesignPatters\AbstractFactory\Toys\SFPuzzleToy;

class SFToyFactory implements ToyFactory
{
    private $location = "San Francisco";

    function makeMaze()
    {
        return new SFMazeToy();
    }

    function makePuzzle()
    {
        return new SFPuzzleToy;
    }
}