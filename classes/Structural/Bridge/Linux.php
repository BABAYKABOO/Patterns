<?php


namespace Structural\Bridge;


class Linux implements IImplements
{

    public function MainWindow(): string
    {
        return "\tLinux's 'Main window'\n";
    }

    public function ContextWindow(): string
    {
        return "\tLinux's 'Context window'\n";
    }

    public function Table(): string
    {
        return "\tLinux's 'Table window'\n";
    }
}