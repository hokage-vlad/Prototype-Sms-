<?php


namespace App\SMSTypes;


class VipSms
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}