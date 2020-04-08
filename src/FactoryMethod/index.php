<?php

require_once __DIR__."/../../vendor/autoload.php";

use App\FactoryMethod\sms;
use App\FactoryMethod\NotifierFactory;
use App\FactoryMethod\Notifier;
use App\FactoryMethod\email;
use App\FactoryMethod\ElectronicNotifierFactory;
use App\FactoryMethod\CourierNotifierFactory;
use App\FactoryMethod\post;

$mobile = ElectronicNotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification();

echo "<br />";

$email = ElectronicNotifierFactory::getNotifier("Email", "test@mail.ru");
echo $email->sendNotification();

echo "<br />";

$post = CourierNotifierFactory::getNotifier("Post", "10 Downing Street, SW1A 2AA");
echo $post->sendNotification();
