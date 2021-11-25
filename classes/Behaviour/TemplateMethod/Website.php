<?php


namespace Behaviour\TemplateMethod;


abstract class Website
{
    public function builder() : void
    {
        $this->topMenu();
        $this->sideBar();
        $this->body();
        $this->footer();

    }
    protected function sideBar() : void
    {
        echo "Side Bar   |\n".
              "___________|\n".
              "Interesting|\n".
              "Accidents  |\n".
              "Murders    |\n".
              "Weather    |\n\n";
    }

    abstract protected function body() : void;

    protected function topMenu() : void
    {
        echo "Home | News | Contact\n"
            ."_____________________\n\n";

    }

    protected function footer() : void
    {
        echo "___________________\n".
              "We're really   \n".
              "value your opinion\n\n";
    }
}