<?php


namespace Behaviour\Observer;


interface ISubscriber
{
    public function update(Channels $channel) : void;
}