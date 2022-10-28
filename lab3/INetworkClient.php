<?php

interface INetworkClient
{
    public function postMessage(string $message): bool;
}
