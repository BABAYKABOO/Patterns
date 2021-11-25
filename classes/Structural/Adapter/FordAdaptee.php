<?php


namespace Structural\Adapter;


class FordAdaptee implements IEngineering
{
    private Ford $ford;
    public function __construct(Ford $ford)
    {
        $this->ford = $ford;
    }
    public function Body(): string
    {
        return $this->ford->BodyCreate();
    }

    public function Engine(): string
    {
        return $this->ford->EngineCreate();
    }
}