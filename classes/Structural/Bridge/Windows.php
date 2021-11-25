<?php


namespace Structural\Bridge;


class Windows implements IImplements
{

    public function MainWindow(): string
    {
        return "\tWindows' 'Main window'\n";
    }

    public function ContextWindow(): string
    {
        return "\tWindows' 'Context window'\n";
    }

    public function Table(): string
    {
        return "\tWindows' 'Table window'\n";
    }
}