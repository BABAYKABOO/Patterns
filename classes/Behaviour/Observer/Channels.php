<?php


namespace Behaviour\Observer;


class Channels
{
    private string $ChannelName;

    private array $videos;

    private array $observers;

    public function __construct(string $ChannelName)
    {
        $this->ChannelName = $ChannelName;
    }

    public function subscribe(ISubscriber $observer) : void
    {
        echo "{$this->ChannelName}: You subscribed .\n";
        $this->observers[$observer->getName()] = $observer;
    }

    public function unsubscribe(ISubscriber $observer) : void
    {
        unset($this->observers[$observer->getName()]);
        echo "{$this->ChannelName}: You unsubscribed\n";
    }

    public function getName() : string
    {
        return $this->ChannelName;
    }

    public function getVideos() : array
    {
        return $this->videos;
    }
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    public function uploadVideo(string $nameVideo): void
    {
        echo "\nAuthor: I'm uploading new video.\n";
        $this->videos[] = $nameVideo;
        echo "Channel: {$nameVideo} published\n\n";
        $this->notify();
    }
}