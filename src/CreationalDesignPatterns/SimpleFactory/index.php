<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use App\SimpleFactory\sms;
use App\SimpleFactory\NotifierFactory;
use App\SimpleFactory\Notifier;
use App\SimpleFactory\email;

$mobile = NotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification()."<br/>";

$email = NotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification();
