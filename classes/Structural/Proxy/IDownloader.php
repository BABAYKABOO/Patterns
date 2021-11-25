<?php


namespace Structural\Proxy;


interface IDownloader
{
    public function downloadPage(string $url) : string;
}