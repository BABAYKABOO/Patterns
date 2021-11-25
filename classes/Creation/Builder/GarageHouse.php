<?php


namespace Creation\Builder;


class GarageHouse implements IBuilder
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
        $this->product->parts[] = "Стены из газобетона с крышой из листовой стали";
        return $this;
    }

    public function setDoor(): IBuilder
    {
        $this->product->parts[] = "Железные ворота";
        return $this;
    }

    public function setWindow(): IBuilder
    {
        $this->product->parts[] = "Одно окно на чердаке";
        return $this;
    }

    public function setSignalization(): IBuilder
    {
        $this->product->parts[] = "Сигнализация из шурупа";
        return $this;
    }

    public function setPool(): IBuilder
    {
        $this->product->parts[] = "Подвальный бассейн";
        return $this;
    }

    public function setCar(): IBuilder
    {
        $this->product->parts[] = "Багги";
        return $this;
    }

    public function setChimney(): IBuilder
    {
        $this->product->parts[] = "Железная труба";
        return $this;
    }
    public function getHouse(): House
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}