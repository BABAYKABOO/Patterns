<?php

namespace Creation\AbstractFactory;


class FordBody implements IBody
{
    public function bodyMake(): void
    {
        echo "Сборка 64 деталей корпуса машины\n";
    }

    public function bodyCheck(): void
    {
        echo "Проверка корпуса на деформирование\nУспешная сборка корпуса\n";
    }
}