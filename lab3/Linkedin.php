<?php

class Linkedin implements INetworkClient
{
    public function __construct(string $email, string $password)
    {
        // connect
    }


    public function postMessage(string $message): bool
    {
        // post message

        return true;
    }
}
