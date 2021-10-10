<?php

namespace App\Classes;

use App\Classes\SendSMS;

class SendCode
{
    public static function sendCode($number, $name)
    {
        $code = rand(111111, 999999);
        $username = "Jahedul";
        $password = "Dhaka@07";
        $mobile = '+8801303454560';
        $content = "Dear {$name}, Your CAAB HCC account verification code is: {$code}";
        $data = SendSMS::sendSMS($username, $password, $mobile, $content);
        return $code;
    }
}
