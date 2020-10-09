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
        if ($this->sms->status() == 200) {
            echo $this->sms->send();
        } else {
            echo $this->sms->error();
        }
    }

}