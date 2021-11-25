<?php

namespace Behaviour\Observer;
require '..\..\..\vendor\autoload.php';

// Наблюдатель — позволяет одним объектам следить и
// реагировать на события, происходящие в других объектах.


$ChannelNature = new Channels('Interesting Nature');

$true = new Subscriber('John');
$ChannelNature->subscribe($true);


$traitor = new Subscriber('Patrick');
$ChannelNature->subscribe($traitor);

$ChannelNature->uploadVideo('Forest');
$ChannelNature->uploadVideo('Desert');

$ChannelNature->unsubscribe($traitor);

$ChannelNature->uploadVideo('Ocean');