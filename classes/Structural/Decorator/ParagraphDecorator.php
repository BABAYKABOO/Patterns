<?php


namespace Structural\Decorator;


class ParagraphDecorator extends BaseDecorator
{
    public function Operation() : string
    {
        return '<a>' . parent::Operation() . '</a>';
    }
}