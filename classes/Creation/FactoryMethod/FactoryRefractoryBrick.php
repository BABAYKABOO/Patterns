<?php
namespace FactoryMethod;

class FactoryRefractoryBrick extends Factory
{

    function getTypeProduct(): IProduct
    {
        return new RefractoryBrick();
    }
}