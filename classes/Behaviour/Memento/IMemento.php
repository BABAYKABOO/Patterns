<?php


namespace Behaviour\Memento;


interface IMemento
{
    public function getName() : string;

    public function getDate() : string;
}