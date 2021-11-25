<?php


namespace Creation\Prototype;


class Category
{
    private string $name;

    private array $goods;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addGoods(Goods $product) : void
    {
        $this->goods[] = $product;
    }
}