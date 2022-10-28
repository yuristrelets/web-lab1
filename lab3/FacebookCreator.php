<?php

class FacebookCreator extends Creator
{
    public function __construct(protected string $login, protected string $password)
    {

    }

    protected function createClient(): INetworkClient
    {
        return new Facebook($this->login, $this->password);
    }
}
