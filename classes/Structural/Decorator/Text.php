<?php


namespace Structural\Decorator;


class Text implements Component
{
    private string $text;
    public function __construct(string $a)
    {
        $this->text = $a;
    }
    public function Operation() : string
    {
        return $this->text;
    }
}