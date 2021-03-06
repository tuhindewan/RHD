<?php

namespace App\Classes;

class SendSMS
{
    public static function sendSMS($username, $password, $phone, $message)
    {
        // make sure passed string is url encoded
        $message = rawurlencode($message);

        $url = "http://clients.muthofun.com:8901/esmsgw/sendsms.jsp?user=$username&password=$password&mobiles=$phone&sms=$message&unicode=1";

        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $url);
        $response = curl_exec($c);
        return $response;
    }
}
