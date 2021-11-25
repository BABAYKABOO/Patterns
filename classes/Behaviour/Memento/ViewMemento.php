<?php


namespace Behaviour\Memento;


class ViewMemento implements IMemento
{
    private string $view;

    private string $date;

    public function __construct(string $view)
    {
        $this->view = $view;
        $this->date = date('Y-m-d H:i:s');
    }
    public function getState() : string
    {
        return $this->view;
    }
    public function getName() : string
    {
        return $this->date . " / (" . $this->view . ")";
    }

    public function getDate(): string
    {
        return $this->date;
    }
}