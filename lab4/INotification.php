<?php

interface INotification
{
    public function send(string $title, string $message);
}