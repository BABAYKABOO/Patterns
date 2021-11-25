<?php


namespace Structural\Bridge;


interface IImplements
{
    public function MainWindow() : string;
    public function ContextWindow() : string;
    public function Table() : string;
}