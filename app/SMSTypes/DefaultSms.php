<?php

namespace App\SMSTypes;

class DefaultSms implements SMSInterface
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
        return "Your message was send by Default....";
    }

    public function error(): string
    {
        return "Error message";
    }
}
