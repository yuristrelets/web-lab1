<?php

class SimplePage extends Page
{
    public function __construct(protected IRenderer $renderer, protected string $title, protected string $content)
    {
        parent::__construct($renderer);
    }

    public function render(): string
    {
        $this->renderer->start();
        $this->renderer->setTitle($this->title);
        $this->renderer->setText($this->content);

        return $this->renderer->flush();
    }
}