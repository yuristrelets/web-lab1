<?php

class SlackNotificationAdapter implements INotification
{
    public function __construct(protected SlackClient $client, protected string $chatId)
    {
        
    }

    public function send(string $title, string $message): void
    {
        $this->client->sendMessage($this->chatId, "title: $title, message: $message");
    }
}