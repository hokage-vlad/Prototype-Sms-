<?php


namespace App\SMSTypes;


class VipSms implements SMSInterface
{
    public function __construct()
    {

    }

    public function send(): string
    {
        return "Your message was send by Vip....";
    }

    public function error(): string
    {
        return "Error message";
    }
}