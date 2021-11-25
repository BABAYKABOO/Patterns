<?php


namespace Behaviour\Strategy;


class DiskC implements IStrategy
{

    public function showDir(): void
    {
        echo "Disk C: \n";
        foreach (scandir("C:\\") as $dir)
        {
            echo "\t{$dir}\n";
        }

    }
}