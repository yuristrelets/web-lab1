<?php

class SmsNotificationAdapter implements INotification
{
    public function __construct(protected SmsClient $client, protected string $phone, protected string $sender)
    {
        
    }

    public function send(string $title, string $message): void
    {
        $this->client->push($this->phone, $this->sender, $title, $message);
        echo "Sent sms message '$message' with title '$title' to phone '$this->phone' and sender '$this->sender'";
    }
}