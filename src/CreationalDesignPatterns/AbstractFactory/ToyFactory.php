<?php

namespace App\CreationalDesignPatters\AbstractFactory;


interface ToyFactory
{
    function makeMaze();
    function makePuzzle();
}