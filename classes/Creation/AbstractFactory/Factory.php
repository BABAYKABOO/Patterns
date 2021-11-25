<?php


namespace Creation\AbstractFactory;


abstract class Factory
{
    abstract function makeEngine() : IEngine;
    abstract function makeBody() : IBody;
    public function __construct()
    {
        $carEngine = $this->makeEngine();
        $carEngine->body();
        $carEngine->setConnections();
        $carEngine->check();
        $carBody = $this->makeBody();
        $carBody->bodyMake();
        $carBody->bodyCheck();
        echo "Ваша машина собрана\n__________\n\n";
    }
}