<?php

class HTMLRenderer implements IRenderer
{
    protected $data = [];

    public function start(): void
    {
        array_push($this->data, '<html><body>');
    }

    public function flush(): string
    {
        array_push($this->data, '</body></html>');

        $result = implode("\n", $this->data);
        
        $this->data = [];

        return $result;
    }

    public function setId(int $id): void
    {
        array_push($this->data, "<p>ID: $id</p>");
    }

    public function setTitle(string $title): void
    {
        array_push($this->data, "<h1>$title</h1>");
    }

    public function setText(string $text): void
    {
        array_push($this->data, "<p>$text</p>");
    }

    public function setImage(string $url): void
    {
        array_push($this->data, "<img src=\"$url\" />");
    }
}