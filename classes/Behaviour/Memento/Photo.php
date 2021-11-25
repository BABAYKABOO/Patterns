<?php


namespace Behaviour\Memento;


class Photo
{
   private string $view;

    public function __construct()
    {
        $this->view = '';
        echo "All the ready, please draw : {$this->view}\n";
    }

    public function draw(string $part) : void
    {
        $this->view .= $part;
    }

    public function display() : void
    {
        echo $this->view;
    }

    public function save() : ViewMemento
    {
        return new ViewMemento($this->view);
    }

    public function restore(ViewMemento $memento) : void
    {
        $this->view = $memento->getState();
        echo "Came back to: {$this->view}\n";
    }
}