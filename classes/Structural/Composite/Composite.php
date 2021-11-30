<?php


namespace Structural\Composite;


class Composite extends Component
{
    public function Add(Component $Component)
    {
        $this -> _children[] = $Component;
    }
    public function GetChild($index)
    {
        if (! isset($this -> _children[$index]))
        {
            return "Child not exists";
        }
        return $this -> _children[$index];
    }
    public function Operation()
    {
        print "I am composite. +to composite\n";
        self::$count_composite++;
        foreach($this -> GetChildren() as $Child)
        {
            $Child -> Operation();
        }
    }
    public function Remove($index)
    {
        if (! isset($this -> _children[$index]))
        {
            return "Child not exists";
        }
        else {
            unset($this->_children[$index]);
            return 'Deleted';
        }
    }
    public function GetChildren()
    {
        return $this -> _children;
    }
}