<?php


namespace Behaviour\State;


class Phone
{
    private StatePhone $state;

    public function __construct(StatePhone $state)
    {
        $this->changeState($state);
    }

    public function changeState(StatePhone $state) : void
    {
        echo "Change phone state to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function buttonPower() : void
    {
        $this->state->action();
    }
}