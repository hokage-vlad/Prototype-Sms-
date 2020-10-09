<?php

use App\SMSTypes\DefaultSms;
use App\SMSTypes\VipSms;
use App\Clients\ClientSMS;

require __DIR__ . '/vendor/autoload.php';

$defaultSms = new DefaultSms();
$vipSms = new VipSms();
$clientSms = new ClientSMS($defaultSms);

$clientSms->send();