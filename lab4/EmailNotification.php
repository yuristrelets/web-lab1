<?php

class EmailNotification implements INotification
{   
    public function __construct(private string $adminEmail)
    {
        
    }
    
    public function send(string $title, string $message): void
    {
        // mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}