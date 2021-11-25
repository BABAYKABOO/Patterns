<?php

namespace Creation\AbstractFactory;


class Ford extends Factory
{

    function makeEngine(): IEngine
    {
        return new FordEngine();
    }

    function makeBody(): IBody
    {
        return new FordBody();
    }
}