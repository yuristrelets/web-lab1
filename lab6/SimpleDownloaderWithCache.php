<?php

class SimpleDownloaderWithCache implements IDownloader
{
    protected $cache = [];

    public function __construct(protected SimpleDownloader $downloader)
    {

    }

    public function download(string $path)
    {
        if (isset($this->cache[$path])) {
            echo "Retrieve from cache: $path\n";
        } else {
            $this->downloader->download($path);
            $this->cache[$path] = $path;
        }
    }
}
