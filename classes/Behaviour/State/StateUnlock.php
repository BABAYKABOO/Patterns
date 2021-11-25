<?php


namespace Behaviour\State;


class StateUnlock extends StatePhone
{

    public function action(): void
    {
        echo "Phone locked\n";
        $this->phone->changeState(new StateLock());
    }
}