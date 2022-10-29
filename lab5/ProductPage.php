<?php

class ProductPage extends Page
{
    public function __construct(protected IRenderer $renderer, protected Product $product)
    {
        parent::__construct($renderer);
    }

    public function render(): string
    {
        $this->renderer->start();
        $this->renderer->setTitle($this->product->getTitle());
        $this->renderer->setText($this->product->getDescription());
        $this->renderer->setImage($this->product->getImage());
        $this->renderer->setId($this->product->getId());

        return $this->renderer->flush();
    }
}