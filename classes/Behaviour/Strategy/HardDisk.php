<?php


namespace Behaviour\Strategy;


class HardDisk
{
    private IStrategy $strategy;
    public function __construct(IStrategy $strategy)
    {
        $this->setStrategy($strategy);
    }

    public function setStrategy(IStrategy $strategy) : void
    {
        $this->strategy = $strategy;
    }
    public function showDir() : void
    {
        $this->strategy->showDir();
    }
}