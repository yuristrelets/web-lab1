<?php

class SmsClient
{
    public function push(string $phone, string $sender, string $message)
    {
        echo "Sent sms message '$message' to phone '$phone' and sender '$sender'\n";
    }
}