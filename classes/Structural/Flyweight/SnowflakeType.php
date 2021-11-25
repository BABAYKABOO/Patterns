<?php


namespace Structural\Flyweight;


class SnowflakeType
{
    private array $inside;
    public function __construct(string $color, string $shape, string $size)
    {
        $this->inside['shape'] = $shape;
        $this->inside['size'] = $size;
        $this->inside['color'] = $color;
    }
    public function getInside() : array
    {
        return $this->inside;
    }
    public function create(int $x, int $y)
    {
        echo $this->inside['color'].' Snowflake '.$this->inside['shape'].' and '.
            $this->inside['size']."($x, $y)"." created \n";
    }
}