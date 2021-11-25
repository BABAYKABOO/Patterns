<?php

namespace Behaviour\Command;

require '..\..\..\vendor\autoload.php';

// Command - превращает запросы в объекты, позволяя передавать их
// как аргументы при вызове методов, ставить запросы в очередь,
// логировать их, а также поддерживать отмену операций.


//Car - получатель
$car = new Car();

//Отправитель
$registry = new CommandRegistry();
//Объект команд
$registry->add(new TurnOn($car), 'ON');
$registry->add(new TurnOff($car), 'OFF');
$registry->get('ON')->execute();
$registry->get('OFF')->execute();