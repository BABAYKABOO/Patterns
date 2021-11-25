<?php


namespace Structural\Decorator;


abstract class BaseDecorator implements Component
{
    protected Component $_component;
    public function __construct(Component $component)
    {
        $this -> _component = $component;
    }
    protected function getComponent() : Component
    {
        return $this -> _component;
    }
    public function Operation() : string
    {
        return $this -> getComponent() -> Operation();
    }
}