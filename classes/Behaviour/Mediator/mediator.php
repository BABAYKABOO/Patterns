<?php

namespace Behaviour\Mediator;
require '..\..\..\vendor\autoload.php';

// Паттерн Посредник заставляет объекты общаться через отдельный объект-посредник,
// который знает, кому нужно перенаправить тот или иной запрос


$b1 = new ButtonPlay();
$b2 = new ButtonStop();
$b3 = new ButtonDisplay();
$mediator = new Watching($b1, $b2, $b3);

$b1->play();

$b2->stop();

$b3->fullDisplay();

$b1->play();

$b3->fullDisplay();
