<?php

namespace App\StructuralDesignPatterns\Bridge;

class Phone extends Device
{

    public function send($body)
    {
        $body .="<br /><br /> Sent from a phone.";

        return $this->sender->send($body);
    }
}