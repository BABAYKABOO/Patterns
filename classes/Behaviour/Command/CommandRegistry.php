<?php


namespace Behaviour\Command;

/*
class CommandRegistry
{
    public function factory($type, Car $car)
    {
        if ($type == 'ON') {
            return new TurnOn($car);
        }
        else if ($type == 'OFF') {
            return new TurnOff($car);
        }

    }
}
 */
class CommandRegistry
{
    private array $registry;
    public function add(ICommand $command, string $type) : void
    {
        $this->registry[$type] = $command;
    }
    public function get($type) : ICommand
    {
        if (!isset($this->registry[$type])) {
            echo 'Cannot find command ' . $type;
        }
        return $this->registry[$type];
    }

}