<?php


namespace Behaviour\Mediator;


interface IMediator
{
    public function notify(Component $comp, string $act) : void;
}