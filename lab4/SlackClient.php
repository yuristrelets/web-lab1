<?php


class SlackClient
{
    public function __construct(string $apiKey, string $login)
    {
        // some logic
        // for example, login
    }

    public function sendMessage(string $chatId, string $message)
    {
        echo "Sent slack message '$message' to chat '$chatId'\n";
    }
}