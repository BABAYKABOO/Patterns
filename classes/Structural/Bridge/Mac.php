<?php


namespace Structural\Bridge;


class Mac implements IImplements
{

    public function MainWindow(): string
    {
        return "\tMac's 'Main window'\n";
    }

    public function ContextWindow(): string
    {
        return "\tMac's 'Context window'\n";
    }

    public function Table(): string
    {
        return "\tMac's 'Table window'\n";
    }
}