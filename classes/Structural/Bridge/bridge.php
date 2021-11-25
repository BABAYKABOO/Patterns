<?php

namespace Structural\Bridge;
require '..\..\..\vendor\autoload.php';



$windows = new ViewProgram(new Windows());
$windows->view();
echo "\n\n";

$linux = new ViewProgram(new Linux());
$linux->view();
echo "\n\n";

$mac = new ViewProgram(new Mac());
$mac->view();

