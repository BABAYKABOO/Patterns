<?php
namespace Creation\FactoryMethod;
require '..\..\..\vendor\autoload.php';

// Фабричный метод отделяет код производства продуктов
// от остального кода, который эти продукты использует.


$I_Need_Usually_Brick = new FactoryUsualBrick(500, 'Красный');
$I_Need_Refractory_Brick = new FactoryRefractoryBrick(370, 'Белый');