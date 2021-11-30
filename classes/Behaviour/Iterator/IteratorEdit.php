<?php


namespace Behaviour\Iterator;


class IteratorEdit implements \Iterator
{
    private int $position = 0;
    private array $array;
    private int $count;
    private string $edit;
    private bool $rename;

    public function __construct(array $array, string $edit, bool $rename = false)
    {
        $this->array = $array;
        $this->edit = $edit;
        $this->rename = $rename;
        $this->count = count($this->array);
    }
    public function current() : string
    {
        return $this->array[$this->position];
    }

    public function next() : string
    {
        if ($this->rename == true) {
            $this->array[$this->position] = $this->edit;
            $this->position++;
            return $this->array[$this->position-1];
        }
        else {
            $this->array[$this->position] .= $this->edit;
            $this->position++;
            return $this->array[$this->position-1];
        }
    }

    public function key() : int
    {
        return $this->position;
    }
    public function valid() : bool
    {
        return $this->position < $this->count;
    }

    public function rewind() : void
    {
        $this->position = 0;
    }
}
