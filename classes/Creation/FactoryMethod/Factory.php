<?php
namespace Creation\FactoryMethod;

abstract class Factory
{
    abstract function getTypeProduct() : IProduct;

    public function __construct(int $count, string $color)
    {
        $product = $this->getTypeProduct();
        $product->count($count);
        $product->color($color);
        $product->confirm();
    }
}