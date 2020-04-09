<?php


namespace App\StructuralDesignPatterns\Bridge;


class Tablet extends Device
{

    public function send($body)
    {
        $body .= "<br /><br /> Sent from a Tablet.";
        return $this->sender->send($body);
    }
}