<?php


namespace Behaviour\Iterator;


class ListMusic implements IList
{
    private array $items;
    private string $edit;

    public function getItems() : array
    {
        return $this->items;
    }

    public function addItem($item) : void
    {
        $this->items[] = $item;
    }
    public function setEdit(string $edit) : void
    {
        $this->edit = $edit;
    }
    public function createIteratorEdit(): \Iterator
    {
        return new IteratorEdit($this->items, $this->edit);
    }
    public function createIteratorRename(): \Iterator
    {
        return new IteratorEdit($this->items, $this->edit, true);
    }
}