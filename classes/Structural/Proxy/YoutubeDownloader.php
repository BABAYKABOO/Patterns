<?php


namespace Structural\Proxy;


class YoutubeDownloader implements IDownloader
{

    public function downloadPage(string $url) : string
    {
        echo "Downloading a page from the server...\n";
        $result = file_get_contents($url);
        echo "Downloaded bytes:  " . strlen($result) . "\n";

        return $result;
    }
}