<?php


namespace Structural\Flyweight;


class SnowFactory
{
    static private array $SnowflakeType;

    public function __construct()
    {
        self::$SnowflakeType[] = new SnowflakeType('White', 'Rhombus', 'big');
    }
    static public function getSnowflake(string $color, string $shape, string $size) : SnowflakeType
    {
        foreach (self::$SnowflakeType as $type)
        {
            $inside = $type->getInside();
            if ($inside['color'] != $color
                || $inside['shape'] != $shape
                || $inside['size'] != $size)
            {
                $type = new SnowflakeType($color, $shape, $size);
                self::$SnowflakeType[] = $type;
            }
            return $type;
        }
        return array_pop(self::$SnowflakeType);
    }
}