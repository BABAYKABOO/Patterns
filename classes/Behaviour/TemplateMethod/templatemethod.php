<?php


namespace Behaviour\TemplateMethod;
require '..\..\..\vendor\autoload.php';

// Паттерн позволяет подклассам переопределять
// шаги алгоритма, не меняя его общей структуры.



$home = new Home();
$home->builder();
readline();
echo "\n\n\n";

$news = new News();
$news->builder();
readline();
echo "\n\n\n";

$contact = new Contact();
$contact->builder();
readline();


