<?php

abstract class Creator
{
    abstract protected function createClient(): INetworkClient;

    public function postMessage(string $message): bool
    {
        $client = $this->createClient();

        echo "\nClient: " . get_class($client);
        echo "\nMessage: " . $message;

        return $client->postMessage($message);
    }
}
