<?php


namespace Structural\Facade;


class UsualWay
{
    public function UselessFunction() : void
    {
        echo 'Lorem impsum dolor';
    }
    public function Forget(Student $student) : bool
    {
        $lucky = rand(0, 10);
        if ($lucky < 3)
        {
            $student->studentBook($this->NameSubject,'Pass');
            return true;
        }
        $student->studentBook($this->NameSubject,'Don\'t pass');
        return false;
    }
}