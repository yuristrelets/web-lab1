<?php

class LinkedinCreator extends Creator
{
    public function __construct(protected string $email, protected string $password)
    {

    }

    protected function createClient(): INetworkClient
    {
        return new Linkedin($this->email, $this->password);
    }
}
