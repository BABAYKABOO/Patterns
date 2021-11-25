<?php
namespace FactoryMethod;

class RefractoryBrick implements IProduct
{

    public function count($count): void
    {
        echo "Вы заказали Огнеупорный кирпич, в количестве {$count}\n";
    }

    public function color($color): void
    {
        echo "Цвет: $color\n";
    }

    public function confirm(): void
    {
        echo "Подтверждаете заказ? [yes/no] \n";


    }
}