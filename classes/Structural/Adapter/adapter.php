<?php

namespace Structural\Adapter;
require '..\..\..\vendor\autoload.php';


function BuildCar(IEngineering $brend) : void
{
    echo 'Attaching - '.$brend->Body()."\nAttaching - ".$brend->Engine();
}

$ford = new Ford();
$usual = new UsualCar();
BuildCar(new FordAdaptee($ford));
echo "\n\n\n";
BuildCar($usual);