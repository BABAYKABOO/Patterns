<?php


namespace Behaviour\Command;


class TurnOn implements ICommand
{
    private Car $car;
    public function __construct(Car $car) {
        $this->car = $car;
    }
    public function execute() : void
    {
        $this->car->turnOn();
    }
}