<?php

class JSONRenderer implements IRenderer
{
    protected $data = [];

    public function start(): void
    {
        
    }

    public function flush(): string
    {
        $result = json_encode($this->data);
        
        $this->data = [];

        return $result;
    }

    public function setId(int $id): void
    {
        $this->data["id"] = $id;
    }

    public function setTitle(string $title): void
    {
        $this->data["title"] = $title;
    }

    public function setText(string $text): void
    {
        $this->data["text"] = $text;
    }

    public function setImage(string $url): void
    {
        $this->data["url"] = $url;
    }
}