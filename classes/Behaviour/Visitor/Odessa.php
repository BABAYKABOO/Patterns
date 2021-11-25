<?php


namespace Behaviour\Visitor;


class Odessa implements ICity
{
    private string $name;
    private array $persons;

    public function __construct(string $name, array $persons)
    {
        $this->name = $name;
        $this->persons = $persons;
    }

    public function getPerson() : array
    {
        return $this->persons;
    }

    public function accept(IVisitor $visitor): array
    {
        return $visitor->findInOdessa($this);
    }
}