<?php

abstract class Page
{
    public function __construct(protected IRenderer $renderer)
    {
        
    }

    public function setRenderer(IRenderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    abstract public function render(): string;
}