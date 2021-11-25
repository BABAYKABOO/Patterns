<?php


namespace Behaviour\TemplateMethod;


class News extends Website
{

    function body() : void
    {
        echo "Global warming            ->\n".
              "Queen of Great Britain    ->\n".
              "The best live in Ukraine  ->\n\n";
    }
    protected function footer() : void
    {
        echo "___________________\n".
            "\nCopyright 2021   \n\n";
    }
}