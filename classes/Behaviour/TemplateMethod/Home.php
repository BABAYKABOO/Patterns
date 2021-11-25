<?php


namespace Behaviour\TemplateMethod;


class Home extends Website
{

    public function body() : void
    {
        echo "Hello friend, this site\n".
              "made for the most popular\n".
              "news from all over the\n ".
              "world\n\n";
    }
}