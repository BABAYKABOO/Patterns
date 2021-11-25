<?php


namespace Behaviour\State;


class StateSlowEnergy extends StatePhone
{

    public function action(): void
    {
        echo 'Please connect charger';
        echo "\nCharger connects...\n";
        $this->phone->changeState(new StateLock());
    }
}