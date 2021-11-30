<?php


namespace Structural\Proxy;


class ProxyDownloader implements IDownloader
{

    private YoutubeDownloader $downloader;

    private array $cache;

    public function __construct(YoutubeDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function downloadPage(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "Usual download...  ";
            $this->cache[$url] = $this->downloader->downloadPage($url);
        } else {
            echo "Economical download\n";
        }
        return $this->cache[$url];
    }
}