<?php

class Product
{
    public function __construct(
        protected int $id, 
        protected string $title, 
        protected string $description, 
        protected string $image
    ) {

    }

    public function getId(): int
    { 
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImage(): string
    {
        return $this->image; 
    }
}