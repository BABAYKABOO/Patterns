<?php


namespace Creation\Builder;


class BrickHouse implements IBuilder
{
    private House $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): IBuilder
    {
        $this->product = new House();
        return $this;
    }

    public function setBase(): IBuilder
    {
        $this->product->parts[] = "Кирпичные стены с крышой из листовой стали";
        return $this;
    }

    public function setDoor(): IBuilder
    {
        $this->product->parts[] = "Железная дверь";
        return $this;
    }

    public function setWindow(): IBuilder
    {
        $this->product->parts[] = "Металлопластиковые окна";
        return $this;
    }

    public function setSignalization(): IBuilder
    {
        $this->product->parts[] = "Сигнализация";
        return $this;
    }

    public function setPool(): IBuilder
    {
        $this->product->parts[] = "Обычный бассейн";
        return $this;
    }

    public function setCar(): IBuilder
    {
        $this->product->parts[] = "Mercedec";
        return $this;
    }

    public function setChimney(): IBuilder
    {
        $this->product->parts[] = "Кирпичный дымоход";
        return $this;
    }
    public function getHouse(): House
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}