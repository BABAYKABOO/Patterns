<?php
namespace Creation\AbstractFactory;

interface IEngine
{
    public function body() : void;
    public function setConnections() : void;
    public function check() : void;
}