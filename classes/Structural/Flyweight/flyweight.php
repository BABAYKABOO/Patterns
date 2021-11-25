<?php

namespace Structural\Flyweight;
require '..\..\..\vendor\autoload.php';

for ($i = 0; $i < 1000000; $i++)
{
    new Snowflake(rand(-100,100), rand(-100,100), 'White', 'Rhombus', 'small');
}
readline();
//for ($i = 0; $i < 1000000; $i++)
//{
//    new Debug(rand(-100,100), rand(-100,100), 'White', 'Rhombus', 'small');
//}
