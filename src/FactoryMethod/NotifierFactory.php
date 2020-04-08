<?php


namespace App\FactoryMethod;


interface NotifierFactory
{
    public static function getNotifier($notifier, $to);

}