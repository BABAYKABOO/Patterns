<?php

namespace Creation\Singleton;

class Singleton
{
    private array $config;
    private static Singleton $_instance;
    private function __construct(){}

    public static function getInst() : Singleton
    {
        if (empty(self::$_instance))
            self::$_instance = new static;
        return self::$_instance;
    }
    public function AddConfig(string $key, string $value) : void
    {
        $this->config[$key] = $value;
    }
    public function  GetConfig() : void
    {
        foreach ($this->config as $value) {
            echo key($this->config).": {$value}"."\n";
            next($this->config);
        }
    }
}


$single = Singleton::getInst();
$single->AddConfig("Difficult", "Easy");
unset($single);
$test = Singleton::getInst();
$test->GetConfig();