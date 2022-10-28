<?php

spl_autoload_register(function($class_name) {
    include_once($class_name . '.php');
});

$publisher1 = new Publisher(NetworkType::Facebook);
$publisher1->publish('publisher1 message');

$publisher2 = new Publisher(NetworkType::Linkedin);
$publisher2->publish('publisher2 message');
