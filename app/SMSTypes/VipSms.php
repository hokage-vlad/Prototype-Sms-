<?php

namespace App\SMSTypes;

class VipSms implements SMSInterface
{

    protected int $statusCode;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function status(): int
    {
        return $this->statusCode;
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