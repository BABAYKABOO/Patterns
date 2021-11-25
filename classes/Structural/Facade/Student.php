<?php


namespace Structural\Facade;


class Student
{
    private string $name;
    private array $studentBook;
    private int $money;
    public function __construct($name, $money)
    {
        $this->name = $name;
        $this->money = $money;
    }
    public function studentBook($subject, $pass) : void
    {
        $this->studentBook[$subject] = $pass;
    }
    public function GetMoney() : int
    {
        return $this->money;
    }
    public function ChangeMoney(int $money)
    {
        $this->money = $money;
    }
    public function resultExams()
    {
        foreach ($this->studentBook as $subject)
        {
            echo key($this->studentBook).'  ->  '.$subject."\n";
            next($this->studentBook);
        }
    }


}