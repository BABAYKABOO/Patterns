<?php


namespace Behaviour\Memento;


class Caretaker
{
    private array $mementos;

    private Photo $photo;

    public function __construct(Photo $photo)
    {
        $this->photo = $photo;
    }

    public function backup() : void
    {
        $this->mementos[] = $this->photo->save();
    }

    public function undo() : void
    {
        if (!count($this->mementos)) {
            return;
        }
        $memento = array_pop($this->mementos);
        $this->photo->restore($memento);
    }

    public function showHistory() : void
    {
        echo "Caretaker: History:\n";
        foreach ($this->mementos as $memento) {
            echo $memento->getName() . "\n";
        }
    }
}