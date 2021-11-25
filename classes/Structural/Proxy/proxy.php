<?php

namespace Structural\Proxy;
require '..\..\..\vendor\autoload.php';


//function clientCode(Downloader $subject)
//{
//    // ...
//
//    $result = $subject->download("http://example.com/");
//
//    // Повторяющиеся запросы на загрузку могут кэшироваться для увеличения
//    // скорости.
//
//    $result = $subject->download("http://example.com/");
//
//    // ...
//}

echo "Download with YoutubeDownloader:\n";
$realSubject = new YoutubeDownloader();
$realSubject->downloadPage("https://youtube.com");
$realSubject->downloadPage("https://youtube.com");
$realSubject->downloadPage("https://youtube.com");

echo "\n";

echo "Download with ProxyDownloader:\n";
$proxy = new ProxyDownloader($realSubject);
$proxy->downloadPage("https://youtube.com");
$proxy->downloadPage("https://youtube.com");
$proxy->downloadPage("https://youtube.com");