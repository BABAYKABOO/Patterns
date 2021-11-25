<?php


namespace Structural\Composite;


abstract class Component
{
    protected $_children = array();
    abstract public function Add(Component $Component);
    abstract public function Remove($index);
    abstract public function GetChild($index);
    abstract public function GetChildren();
    abstract public function Operation();
}
