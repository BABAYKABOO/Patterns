<?php


namespace Behaviour\State;


abstract class StatePhone
{
    protected Phone $phone;

    public function setContext(Phone $phone) : void
    {
        $this->phone = $phone;
    }

    abstract public function action(): void;
}