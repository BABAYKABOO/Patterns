<?php

namespace Creation\Builder;

require '..\..\..\vendor\autoload.php';
/*
* Строитель — это порождающий паттерн проектирования,
* который позволяет создавать сложные объекты пошагово.
* Строитель даёт возможность использовать один и тот же
* код строительства для получения разных представлений объектов.
*/
$garage = new Director(new GarageHouse());
$garage->BuildHouse();
$garage->ChangeBuilder(new PeasantHouse());
$garage->BuildHouse();
$garage->ChangeBuilder(new BrickHouse());
$garage->BuildHouse();
