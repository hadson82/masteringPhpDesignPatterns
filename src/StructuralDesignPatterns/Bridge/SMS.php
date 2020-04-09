<?php

namespace App\StructuralDesignPatterns\Bridge;

class SMS implements Messenger
{

    public function send($body)
    {
        echo "SMS: " . $body;
    }
}