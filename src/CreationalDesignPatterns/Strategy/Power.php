<?php

namespace App\Strategy;

interface Power
{
     public function raise(int $number): int;
}