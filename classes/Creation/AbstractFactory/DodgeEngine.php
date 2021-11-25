<?php


namespace Creation\AbstractFactory;


class DodgeEngine implements IEngine
{
    public function body(): void
    {
        echo "Сборка корпуса из чугуна\n";
    }

    public function setConnections(): void
    {
        echo "Установка связей\n";
    }

    public function check(): void
    {
        echo "Проверка работы двигателя 3.6L Pentastar V6\nДвигатель успешно создан\n\n";
    }
}