<?php

class SmsNotificationAdapter implements INotification
{
    public function __construct(protected SmsClient $client, protected string $phone, protected string $sender)
    {
        
    }

    public function send(string $title, string $message): void
    {
        $this->client->push($this->phone, $this->sender, "$title\n$message");
    }
}