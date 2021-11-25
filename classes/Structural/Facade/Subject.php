<?php


namespace Structural\Facade;


class Subject
{
    private string $NameTeacher;
    private string $NameSubject;

    public function __construct(string $NameSubject)
    {
        $this->NameSubject = $NameSubject;
    }

    public function SetTeacherName(string $name) : void
    {
        $this->NameTeacher = $name;
    }
    public function GetTeacherName() : string
    {
        return $this->NameTeacher;
    }
    public function SomethingUnimportant() : int
    {
        return rand(100000);
    }


    public function KnowledgeExam(Student $student) : bool
    {
        $lucky = rand(0, 10);
        if ($lucky < 2)
        {
            $student->studentBook($this->NameSubject,'Pass');
            return true;
        }
        $student->studentBook($this->NameSubject,'Don\'t pass');
        return false;
    }

}