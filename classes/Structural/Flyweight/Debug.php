<?php


namespace Structural\Flyweight;


class Debug
{
    private int $x;
    private int $y;
    private string $color;
    private string $shape;
    private string $size;

    public function __construct(int $x, int $y, string $color, string $shape, string $size)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
        $this->size = $size;
        $this->shape = $shape;
        echo $color.' Snowflake '.$shape.' and '.
            $size."($x, $y)"." created \n";
    }
}