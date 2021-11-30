<?php


namespace Structural\Composite;


class Leaf extends Component
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function Add(Component $Component) : void
    {
        echo "I can't append child to myself";
    }
    public function GetChild($name) : string
    {
        return "Child not exists";
    }
    public function Operation()
    {
        print "I am leaf +to leaf \n";
        self::$count_leaf++;
    }
    public function Remove($index) : void
    {
        echo "Child not exists";
    }
    public function GetChildren() : array
    {
        return array();
    }
}