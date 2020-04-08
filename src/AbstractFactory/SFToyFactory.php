<?php


namespace App\AbstractFactory;


use App\AbstractFactory\Toys\SFMazeToy;
use App\AbstractFactory\Toys\SFPuzzleToy;

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