<?php


namespace App\AbstractFactory;


use App\AbstractFactory\Toys\UKMazeToy;
use App\AbstractFactory\Toys\UKPuzzleToy;

class UKToyFactory implements ToyFactory
{

    function makeMaze()
    {
        return new UKMazeToy;
    }

    function makePuzzle()
    {
        return new UKPuzzleToy;
    }
}