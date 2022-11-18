<?php

class SimpleDownloader implements IDownloader
{
    public function download(string $path)
    {
        echo "Download: $path\n";
    }
}
