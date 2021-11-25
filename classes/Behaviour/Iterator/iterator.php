<?php

namespace Behaviour\Iterator;
require '..\..\..\vendor\autoload.php';

// Идея паттерна Итератор состоит в том, чтобы вынести
// поведение обхода коллекции из самой коллекции в отдельный класс.


$collection = new ListMusic();
$collection->addItem("Track_1");
$collection->addItem("Track_2");
$collection->addItem("Track_3");
$collection->setEdit(" | Metallica");

$item = $collection->createIteratorEdit();
while ($item->valid()) {
    echo $item->next()."\n";
}

$collection->setEdit("Song of Metallica");
$item = $collection->createIteratorRename();
while ($item->valid()) {
    echo $item->next()."\n";
}