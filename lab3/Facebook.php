<?php

class Facebook implements INetworkClient
{
    public function __construct(string $login, string $password)
    {
        // connect
    }


    public function postMessage(string $message): bool
    {
        // post message

        return true;
    }
}
