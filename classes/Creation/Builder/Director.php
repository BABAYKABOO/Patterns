<?php


namespace Creation\Builder;


class Director
{
    private IBuilder $builder;
    public function __construct(IBuilder $builder)
    {
        $this->builder = $builder;
    }
    public function ChangeBuilder(IBuilder $builder) : void
    {
        $this->builder = $builder;
    }
    public function BuildHouse() : void
    {
        $this->builder->
        setBase()->
        setDoor()->
        setWindow()->
        setSignalization()->
        setPool()->
        setCar()->
        setChimney()->
        getHouse()->
        getFullHouse();
    }
}