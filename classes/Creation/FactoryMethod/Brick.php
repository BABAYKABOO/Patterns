<?php
namespace Creation\FactoryMethod;

class Brick implements IProduct
{
    public function count($count): void
    {
        echo "Вы заказали Обычный кирпич, в количестве {$count}\n";
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