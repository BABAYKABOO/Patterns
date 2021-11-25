<?php


namespace Behaviour\Iterator;


interface IList
{
    public function createIteratorEdit() : \Iterator;
    public function createIteratorRename() : \Iterator;
}