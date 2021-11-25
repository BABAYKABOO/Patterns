<?php


namespace Creation\Builder;


class PeasantHouse implements IBuilder
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
        $this->product->parts[] = "Деревянные стены с соломянной крышой";
        return $this;
    }

    public function setDoor(): IBuilder
    {
        $this->product->parts[] = "Хлипкая деревянная дверь";
        return $this;
    }

    public function setWindow(): IBuilder
    {
        $this->product->parts[] = "Окно без стекла с решеткой из палок";
        return $this;
    }

    public function setSignalization(): IBuilder
    {
        $this->product->parts[] = "Сигнализация из двух палок и нитки";
        return $this;
    }

    public function setPool(): IBuilder
    {
        $this->product->parts[] = "Землянной бассейн";
        return $this;
    }

    public function setCar(): IBuilder
    {
        $this->product->parts[] = "Конь";
        return $this;
    }

    public function setChimney(): IBuilder
    {
        $this->product->parts[] = "Дырка в потолке";
        return $this;
    }
    public function getHouse(): House
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}