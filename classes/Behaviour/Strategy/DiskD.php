<?php


namespace Behaviour\Strategy;


class DiskD implements IStrategy
{

    public function showDir(): void
    {
        echo "Disk D: \n";
        foreach (scandir("D:\\") as $dir)
        {
            echo "\t{$dir}\n";
        }
    }
}