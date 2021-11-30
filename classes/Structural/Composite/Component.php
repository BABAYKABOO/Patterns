<?php


namespace Structural\Composite;


abstract class Component
{
    static int $count_leaf = 0;
    static int $count_composite = 0;
    public function getCount() : void
    {
        echo "Leaf: ".self::$count_leaf."\n Composite: ".self::$count_composite;
    }
    protected $_children = array();
    abstract public function Add(Component $Component);
    abstract public function Remove($index);
    abstract public function GetChild($index);
    abstract public function GetChildren();
    abstract public function Operation();
}
