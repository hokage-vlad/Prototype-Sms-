<?php

namespace App\SMSTypes;

class DefaultSms implements SMSInterface
{
    public function __construct()
    {

    }

    public function send(): string
    {
        return "Your message was send by Default....";
    }

    public function error(): string
    {
        return "Error message";
    }
}
