<?php


namespace Structural\Decorator;
require '..\..\..\vendor\autoload.php';


$Post = new Text('New post');
$AddParagraph = new ParagraphDecorator($Post);
$AddDiv = new DivDecorator($AddParagraph);
print $AddDiv -> Operation();