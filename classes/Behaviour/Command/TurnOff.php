<?php


namespace Behaviour\Command;


class TurnOff implements ICommand
{
    protected Car $car;
    public function __construct(Car $car)
    {
        $this->car = $car;
    }
    public function execute() : void
    {
        $this->car->turnOff();
    }
}