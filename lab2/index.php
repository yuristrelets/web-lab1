<?php

spl_autoload_register(function($class_name) {
    include_once($class_name . '.php');
});

$user1 = new User(FileSystemStorage::getInstance());
$user2 = new User(AmazonStorage::getInstance());
$user3 = new User(FileSystemStorage::getInstance());
$user4 = new User(AmazonStorage::getInstance());

$user1->setAvatar();