<?php

namespace App\StructuralDesignPatterns\Bridge;

class InstantMessenger implements Messenger
{

    public function send($body)
    {
        echo "InstantMessenger: " . $body;
    }
}