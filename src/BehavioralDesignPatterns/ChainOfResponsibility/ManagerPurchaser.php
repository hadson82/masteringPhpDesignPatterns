<?php


namespace App\BehavioralDesignPatterns\ChainOfResponsibility;


class ManagerPurchaser implements Purchaser
{


    private $nextPurchaser;

    public function setNextPurchaser(Purchaser $nextPurchaser): bool
    {
        $this->nextPurchaser = $nextPurchaser;
        return true;
    }

    public function buy($price): bool
    {
        if ($price < 500) {
            var_dump("Manager purchased");
            return true;
        } else {
            if(isset($this->nextPurchaser)){
                return $this->nextPurchaser->buy($price);
            } else {
                var_dump("Could not buy");
                return false;
            }
        }
    }

}