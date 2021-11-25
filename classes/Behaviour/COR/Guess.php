<?php


namespace Behaviour\COR;


class Guess
{
    protected int $RightNumber = 10;
    protected Guess $next;
    public function setNumber(int $number) : void
    {
        $this->RightNumber = $number;
    }
    public function linkIf(Guess $next): Guess
    {
        $this->next = $next;
        return $next;
    }
    public function check(int $number): bool
    {
        if (!$this->next) {
            return false;
        }

        return $this->next->check($number);
    }
}