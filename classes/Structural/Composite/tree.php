<?php

namespace Structural\Composite;
require '..\..\..\vendor\autoload.php';

$s = new Composite();
$s->add(new Leaf('Hi'));
$s->add(new Leaf('Hello'));
$s->add(new Leaf('Hip-hop'));
$d = new Composite();
$d->add(new Leaf('Join'));
$d->add(new Leaf('John'));
$d->add(new Leaf('Jump'));
$s->add($d);
$s->Operation();