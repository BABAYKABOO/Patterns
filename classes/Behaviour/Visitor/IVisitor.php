<?php


namespace Behaviour\Visitor;


interface IVisitor
{
    public function findInOdessa(Odessa $city) : array;
    public function findInKiev(Kiev $city) : array;
}