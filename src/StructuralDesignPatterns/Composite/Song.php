<?php

namespace App\StructuralDesignPatterns\Composite;



class Song implements Music
{
    public $id;
    public $name;

    public function __construct(string $name)
    {
        $this->id = uniqid();
        $this->name = $name;
    }

    public function play()
    {
        printf("Playing song #%s, %s.<br />", $this->id, $this->name);
    }
}