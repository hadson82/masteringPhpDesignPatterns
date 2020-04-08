<?php

namespace App\Strategy;

class Square implements Power
{

    public function raise(int $number): int
    {
        return pow($number, 2);
    }
}