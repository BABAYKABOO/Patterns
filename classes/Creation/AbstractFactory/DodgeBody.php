<?php


namespace Creation\AbstractFactory;


class DodgeBody implements IBody
{
    public function bodyMake(): void
    {
        echo "Сборка 126 деталей корпуса машины\n";
    }

    public function bodyCheck(): void
    {
        echo "Проверка корпуса на деформирование\nУспешная сборка корпуса\n";
    }
}