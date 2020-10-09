<?php

namespace App\Clients;

use App\SMSTypes\SMSInterface;

class ClientSMS
{
    private SMSInterface $sms;

    public function __construct(SMSInterface $sms)
    {
        $this->sms = $sms;
    }

    public function send(): void
    {
        if (true) {
            echo $this->sms->send();
        } else {
            echo $this->sms->error();
        }
    }

}