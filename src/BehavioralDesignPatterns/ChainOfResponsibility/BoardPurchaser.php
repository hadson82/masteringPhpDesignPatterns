<?php

namespace App\BehavioralDesignPatterns\ChainOfResponsibility;



class BoardPurchaser implements Purchaser
{


    private $nextPurchaser;

    public function setNextPurchaser(Purchaser $nextPurchaser): bool
    {
        $this->nextPurchaser = $nextPurchaser;
        return true;
    }

    public function buy($price): bool
    {
        if ($price < 100000) {
            var_dump("Board purchased");
            return true;
        } else {
            if (isset($this->nextPurchaser)) {
                return $this->nextPurchaser->buy($price);
            } else {
                var_dump("Could not bue");
                return false;
            }
        }
    }
}