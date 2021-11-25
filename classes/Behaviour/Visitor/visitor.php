<?php

//Посетитель позволяет добавлять операции к целой иерархии
//классов, без надобности менять код этих классов.

namespace Behaviour\Visitor;
require '..\..\..\vendor\autoload.php';


$OdessaPersons = array("builders" => array('John', 'Mike', 'Shkiper'),
                       "electrics" => array('Patrick', 'Gena'),
                       "bricklayers" => array('Vasya', 'Georg'),
                       "gangsters" => array('Raf', 'Mick'),
                       "businessmen" => array('Kot', 'Dog'),
                       "teachers" => array('Viktorovna', 'Anna'));
$KievPersons = array("builders" => array('Kolya', 'Lesha', 'Stas'),
                    "electrics" => array('Ela', 'Jena'),
                    "bricklayers" => array('Vlad', 'Maks'),
                    "gangsters" => array('Arsen', 'Marina'),
                    "presidents" => array('Volodymir', 'Petr', 'Viktor'),
                    "businessmen" => array('Valera', 'Fish'),
                    "teachers" => array('Hermeus_Mora', 'Fishl'));

$CityOfUkraine = new Odessa('Odessa', $OdessaPersons);
$Capital = new Kiev('Kiev', $KievPersons);

$ImportantPersons = new ImportantPersons();
$WorkerPersons = new WorkerPersons();

echo "Odessa important peoples\n";
print_r($CityOfUkraine->accept($ImportantPersons));


echo "\n\nKiev worker peoples\n";
print_r($Capital->accept($WorkerPersons));