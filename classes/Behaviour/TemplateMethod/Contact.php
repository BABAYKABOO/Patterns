<?php


namespace Behaviour\TemplateMethod;


class Contact extends Website
{

    function body() : void
    {
        echo "You can get in touch\n".
              "with us by this email\n".
             "example@gmail.com\n\n";
    }
    function sideBar(): void {}
}