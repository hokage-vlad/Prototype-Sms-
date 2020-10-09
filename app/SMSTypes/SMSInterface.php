<?php


namespace App\SMSTypes;


interface SMSInterface
{
    public function send(): string ;

    public function error(): string ;
}