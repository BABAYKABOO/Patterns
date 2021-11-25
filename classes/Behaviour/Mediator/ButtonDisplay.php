<?php


namespace Behaviour\Mediator;


class ButtonDisplay extends Component
{
    public function fullDisplay() : void
    {
        $this->mediator->notify($this, "FullDisplay");
    }
    public function doFullDisplay() : void
    {
        echo "The video is shown in full screen \n";
    }
    public function doSmallDisplay() : void
    {
        echo "The video is shown in small screen \n";
    }
}