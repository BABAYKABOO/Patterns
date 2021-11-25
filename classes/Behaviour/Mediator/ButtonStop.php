<?php


namespace Behaviour\Mediator;


class ButtonStop extends Component
{
    public function stop() : void
    {
        $this->mediator->notify($this, "Stop");
    }
    public function doStop() : void
    {
        echo "Video stopped \n";
    }
}