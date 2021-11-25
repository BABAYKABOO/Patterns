<?php

namespace Creation\AbstractFactory;


class FordEngine implements IEngine
{
    public function body(): void
    {
        echo "Сборка корпуса из титана\n";
    }

    public function setConnections(): void
    {
        echo "Установка связей\n";
    }

    public function check(): void
    {
        echo "Проверка работы двигателя Godzilla V8\nДвигатель успешно создан\n\n";
    }
}