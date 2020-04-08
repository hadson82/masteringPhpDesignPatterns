<?php


namespace App\FactoryMethod;


class ElectronicNotifierFactory implements NotifierFactory
{

    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)) {
            throw new \Exception("No notifier passed.");
        }

        switch ($notifier) {
            case 'SMS':
                return new sms($to);
                break;
            case 'Email':
                return new email($to, 'Junade');
                break;
            default:
                throw new \Exception(("Notifier invalid."));
                break;
        }
    }

}