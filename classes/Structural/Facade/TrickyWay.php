<?php


namespace Structural\Facade;


class TrickyWay
{
    public function UselessFunction() : void
    {
        echo 'Lorem impsum dolor';
    }
    public function TryBride(Student $student, string $NameSubject) : bool
    {
        $lucky = rand(0, 10);
        if ($lucky < 4)
        {
            $student->studentBook($NameSubject,'Pass');
            $student->ChangeMoney($student->GetMoney() - 500);
            return true;
        }
        $student->studentBook($NameSubject,'Don\'t pass');
        return false;
    }
}