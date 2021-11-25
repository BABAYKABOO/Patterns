<?php


namespace Structural\Flyweight;


class Snowflake
{
    private int $x;
    private int $y;
    private SnowflakeType $Type;

    public function __construct(int $x, int $y, string $color, string $shape, string $size)
    {
        $factory = new SnowFactory();
        $this->Type = $factory->getSnowflake($color, $shape, $size);
        $this->x = $x;
        $this->y = $y;
        $this->create();
    }
    public function create()
    {
        $this->Type->create($this->x, $this->y);
    }
}