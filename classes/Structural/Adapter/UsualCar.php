<?php


namespace Structural\Adapter;


class UsualCar implements IEngineering
{
    public function Body() : string
    {
        return 'Usual body \'class H\'';
    }
    public function Engine() : string
    {
        return 'Usual engine \'power V6\'';
    }
}