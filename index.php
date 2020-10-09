<?php

use App\SMSTypes\DefaultSms;
use App\SMSTypes\VipSms;
use App\Clients\ClientSMS;

require __DIR__ . '/vendor/autoload.php';

$defaultSms = new DefaultSms(200);
$vipSms = new VipSms(200);

$clientSms = new ClientSMS($vipSms);

$clientSms->send();