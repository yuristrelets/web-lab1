<?php

class XMLRenderer implements IRenderer
{
    protected $data = [];

    public function start(): void
    {
        array_push($this->data, '<page>');
    }

    public function flush(): string
    {
        array_push($this->data, '</page>');

        $result = implode("\n", $this->data);
        
        $this->data = [];

        return $result;
    }

    public function setId(int $id): void
    {
        array_push($this->data, "<id>$id</id>");
    }

    public function setTitle(string $title): void
    {
        array_push($this->data, "<title>$title</title>");
    }

    public function setText(string $text): void
    {
        array_push($this->data, "<text>$text</text>");
    }

    public function setImage(string $url): void
    {
        array_push($this->data, "<image>$url</image>");
    }
}