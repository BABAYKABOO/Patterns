<?php


namespace Behaviour\Visitor;


interface ICity
{
    public function accept(IVisitor $visitor) : array;
}