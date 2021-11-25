<?php

namespace Behaviour\State;
require '..\..\..\vendor\autoload.php';

// Состояние — позволяет объектам менять поведение в зависимости от
// своего состояния. Извне создаётся впечатление, что изменился класс объекта.


$phone = new Phone(new StateLock());
$phone->buttonPower();
echo "\n\n";
$phone->changeState(new StateUnlock());
$phone->buttonPower();
echo "\n\n";
$phone->changeState(new StateSlowEnergy());
$phone->buttonPower();