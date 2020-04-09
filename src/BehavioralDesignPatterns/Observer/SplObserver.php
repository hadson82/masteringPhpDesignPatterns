<?php

namespace App\BehavioralDesignPatterns\Observer;

interface SplObserver
{
    public function update(SplSubject $subject);
}