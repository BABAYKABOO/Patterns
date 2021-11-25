<?php


namespace Behaviour\Mediator;


class Component
{
    protected IMediator $mediator;

    public function setMediator(IMediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}