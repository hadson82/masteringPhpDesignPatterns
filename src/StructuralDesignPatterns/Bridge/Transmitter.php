<?php

namespace App\StructuralDesignPatterns\Bridge;

interface Transmitter
{
    public function setSender(Messenger $sender);

    public function send($body);

}