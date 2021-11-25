<?php


namespace Structural\Adapter;


interface IFord
{
    public function BodyCreate() : string;
    public function EngineCreate() : string;
}