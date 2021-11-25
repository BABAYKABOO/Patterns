<?php

namespace Behaviour\Strategy;
require '..\..\..\vendor\autoload.php';


//В Стратегии объекты не знают друг о друге и никак не связаны.
//В Состоянии сами конкретные состояния могут переключать контекст.

// Стратегия предлагает определить семейство схожих алгоритмов, которые
// часто изменяются или расширяются, и вынести их в собственные классы.


$C = new DiskC();
$D = new DiskD();

$console = new HardDisk($C);
$console->showDir();
echo "\n\n\n";
$console->setStrategy($D);
$console->showDir();
echo "\n\n\n";