<?php

class SlackNotificationAdapter implements INotification
{
    public function __construct(protected SlackClient $client, protected string $chatId)
    {
        
    }

    public function send(string $title, string $message): void
    {
        $this->client->sendMessage($this->chatId, $title, $message);
        echo "Sent slack message '$message' with title '$title' to chat '$this->chatId'";
    }
}