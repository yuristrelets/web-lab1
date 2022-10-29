<?php

interface IRenderer
{
    public function start(): void;
    public function flush(): string;

    public function setId(int $id): void;
    public function setTitle(string $title): void;
    public function setText(string $text): void;
    public function setImage(string $url): void;
}