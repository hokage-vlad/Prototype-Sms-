<?php

namespace App\SMSTypes;

class DefaultSms
{
    protected string $name;

    public function __construct($name)
    {
       echo $this->name = $name;
    }
}
