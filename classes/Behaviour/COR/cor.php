<?php

namespace Behaviour\COR;

require '..\..\..\vendor\autoload.php';

// Цепочка обязанностей — позволяет передавать запросы последовательно по цепочке обработчиков.

$check = new Hard();
$check
    ->linkIf(new Middle())
    ->linkIf(new Easy());

if(!$check->check(8))
    echo 'Yor\'re lost' ;