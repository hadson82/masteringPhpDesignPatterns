<?php

namespace App\StructuralDesignPatterns\Facade;

class SMS
{
    private $form;

    public function __construct(string $form)
    {
        $this->form = $form;
    }

    public function send(string $to, string $message): bool
    {
        if (empty($to)) {
            return false;
        }
        if (strlen($message) === 0) {
            return false;
        }

        echo $to . " received message: " . $message;
        return true;
    }

}