<?php


namespace Behaviour\Memento;
require '..\..\..\vendor\autoload.php';

// Паттерн Снимок поручает создание копии состояния
// объекта самому объекту, который этим состоянием владеет.


$photo = new Photo();
$caretaker = new Caretaker($photo);

while(true)
{
    $line = readline();
    switch ($line)
    {
        case 'Back':
            $caretaker->undo();
            break;
        case 'History':
            $caretaker->showHistory();
            break;
        default:
            $caretaker->backup();
            $photo->draw($line);
    }
}