<?php

spl_autoload_register(function($class_name) {
    include_once($class_name . '.php');
});


function sendNotification(INotification $notification, string $title, string $message)
{
    echo $notification->send($title, $message);
}

sendNotification(new EmailNotification("admin@gmail.com"), "email title", "email message");
echo "\n\n";

$slackClient = new SlackClient("23ld23kdml2k3mdl23", "login");
sendNotification(new SlackNotificationAdapter($slackClient, "my chat"), "slack title", "slack message");
echo "\n\n";

sendNotification(new SmsNotificationAdapter(new SmsClient(), "+380501234567", "sender name"), "sms title", "sms message");


