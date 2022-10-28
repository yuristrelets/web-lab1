<?php

class Publisher
{
    protected Creator $creator;

    public function __construct(NetworkType $type)
    {
        switch ($type) {
            case NetworkType::Facebook:
                $this->creator = new FacebookCreator('login', 'password');
                break;

            case NetworkType::Linkedin:
                $this->creator = new LinkedinCreator('email', 'password');
                break;
        }
    }

    public function publish(string $message)
    {
        $this->creator->postMessage($message);
    }
}
