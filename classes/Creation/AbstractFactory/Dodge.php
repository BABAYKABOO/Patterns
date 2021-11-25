<?php

namespace Creation\AbstractFactory;


class Dodge extends Factory
{

    function makeEngine(): IEngine
    {
        return new DodgeEngine();
    }

    function makeBody(): IBody
    {
        return new DodgeBody();
    }
}