<?php


namespace Structural\Bridge;


class ViewProgram
{
    private IImplements $implement;

    public function __construct(IImplements $implement)
    {
        $this->implement = $implement;
    }

    public function view() : void
    {
        echo 'Display for '.get_class($this->implement)."\n";
        echo $this->implement->MainWindow();
        echo $this->implement->ContextWindow();
        echo $this->implement->Table();
    }
}