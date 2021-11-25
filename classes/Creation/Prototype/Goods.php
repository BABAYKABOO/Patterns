<?php


namespace Creation\Prototype;


class Goods
{
    private string $title;
    private int $price;
    private string $desc;
    private int $rating;
    private Category $category;

    public function __construct(string $title, int $price, string $desc, int $rating, Category $category)
    {
        $this->title = $title;
        $this->price = $price;
        $this->desc = $desc;
        $this->rating = $rating;
        $this->category = $category;
        $this->category->addGoods($this);
    }

    public function __clone()
    {
        $this->title = '{COPY}'.$this->title;
        $this->price = -1;
    }
}