<?php


namespace Behaviour\Observer;


class Subscriber implements ISubscriber
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        echo "Hello {$name}, we recommend these channel to you for beginning ...\n";
    }

    public function getName() : string
    {
        return $this->name;
    }
    public function update(Channels $channel) : void
    {
        $i = $channel->getVideos();
        echo "YouTube: Hello {$this->name}, '{$channel->getName()}' published new video '".array_pop($i)."'\n";
    }
}