<?php


namespace Behaviour\Mediator;


class Watching implements IMediator
{
    private Component $play;
    private Component $stop;
    private Component $fullDisplay;
    private bool $stateDisplay = false;
    public function __construct(Component $play, Component $stop, Component $fullDisplay)
    {
        $this->play = $play;
        $this->play->setMediator($this);

        $this->stop = $stop;
        $this->stop->setMediator($this);

        $this->fullDisplay = $fullDisplay;
        $this->fullDisplay->setMediator($this);
    }

    public function notify(Component $comp, string $act): void
    {
        if ($act == "Play")
            $this->play->doPlay();
        if ($act == "Stop")
            $this->stop->doStop();
        if ($act == "FullDisplay") {
            if ($this->stateDisplay) {
                $this->stateDisplay = !$this->stateDisplay;
                $this->fullDisplay->doSmallDisplay();
            }
            else {
                $this->stateDisplay = !$this->stateDisplay;
                $this->fullDisplay->doFullDisplay();
            }
        }
    }
}