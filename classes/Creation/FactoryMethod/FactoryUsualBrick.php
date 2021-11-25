<?php
namespace FactoryMethod;

class FactoryUsualBrick extends Factory
{
    public function getTypeProduct(): IProduct
    {
        return new Brick();
    }
}