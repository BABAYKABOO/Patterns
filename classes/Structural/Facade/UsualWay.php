<?php


namespace Structural\Facade;


class UsualWay
{
    public function UselessFunction() : void
    {
        echo 'Lorem impsum dolor';
    }
    public function Forget(Student $student, string $NameSubject) : bool
    {
        $lucky = rand(0, 10);
        if ($lucky < 3)
        {
            $student->studentBook($NameSubject,'Pass');
            return true;
        }
        $student->studentBook($NameSubject,'Don\'t pass');
        return false;
    }
}