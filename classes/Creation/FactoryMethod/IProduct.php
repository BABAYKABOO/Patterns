<?php
namespace FactoryMethod;

interface IProduct
{
    public function count($count) : void;

    public function color($color) : void;

    public function confirm() : void;
}
