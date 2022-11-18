<?php

spl_autoload_register(function($class_name) {
    include_once($class_name . '.php');
});

function download(IDownloader $downloader)
{
    $downloader->download("some-file-path");
    $downloader->download("some-file-path");
    $downloader->download("some-file-path");
}

echo "Original object:\n";
$original = new SimpleDownloader();
download($original);

echo "\nProxy:\n";
download(new SimpleDownloaderWithCache($original));
