<?php


namespace Behaviour\COR;


class Middle extends Guess
{
    public function check(int $number) : bool
    {
        if ($number - $this->RightNumber < 6 && $number - $this->RightNumber > -6) {
            echo "You're lucky. The correct number was ".$this->RightNumber."{ Level: Middle }"."\n";
            return true;
        }

        return parent::check($number);
    }
}