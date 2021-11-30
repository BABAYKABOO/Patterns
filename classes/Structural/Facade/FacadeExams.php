<?php


namespace Structural\Facade;


class FacadeExams
{

    public function __construct(string $name, array $subjects, int $money = 0)
    {
        $student = new Student($name, $money);
        foreach ($subjects as $subject)
        {
            $subj = new Subject($subject);
            if ($subj->KnowledgeExam($student))
                continue;
            $usualWay = new UsualWay();
            if ($usualWay->Forget($student, $subject))
                continue;
            if ($student->GetMoney() > 500) {
                $anotherWay = new TrickyWay();
                if ($anotherWay->TryBride($student, $subject))
                    continue;
            }
        }
        $student->resultExams();
    }
}