<?php


namespace Creation\Builder;


interface IBuilder
{
    public function setBase() : IBuilder;
    public function setDoor() : IBuilder;
    public function setWindow() : IBuilder;
    public function setSignalization() : IBuilder;
    public function setPool() : IBuilder;
    public function setCar() : IBuilder;
    public function setChimney() : IBuilder;
}