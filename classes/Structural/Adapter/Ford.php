<?php


namespace Structural\Adapter;


class Ford implements IFord
{
    public function BodyCreate() : string
    {
        return 'Ford\'s body \'class C\'';
    }

    public function EngineCreate() : string
    {
        return 'Ford\'s engine \'power V8\'';
    }
}