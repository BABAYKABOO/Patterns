<?php


namespace Behaviour\Mediator;


class ButtonPlay extends Component
{
    public function play() : void
    {
        $this->mediator->notify($this, "Play");
    }
    public function doPlay() : void
    {
        echo "Video is playing \n";
    }
}