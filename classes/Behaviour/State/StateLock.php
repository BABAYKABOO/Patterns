<?php


namespace Behaviour\State;


class StateLock extends StatePhone
{

    public function action(): void
    {
        echo "Display main screen\n";
        $this->phone->changeState(new StateUnlock());
    }
}