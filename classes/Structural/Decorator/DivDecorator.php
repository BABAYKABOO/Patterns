<?php


namespace Structural\Decorator;


class DivDecorator extends BaseDecorator
{
    public function Operation() : string
    {
        return "<div>\n\t" . parent::Operation() . "\n</div>";
    }
}