<?php


namespace Creation\Builder;


class House
{
    public array  $parts;

    public function getFullHouse(): void
    {
        echo "Product parts: \n" . implode("\n", $this->parts) . "\n\n";
    }
}