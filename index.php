<?php

use App\SMSTypes\DefaultSms;
use App\SMSTypes\VipSms;

require __DIR__ . '/vendor/autoload.php';

$defaultSms = new DefaultSms('Default Sms');
$vipSms = new VipSms('Vip Sms');
