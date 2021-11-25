<?php


namespace Behaviour\COR;


class Easy extends Guess
{
    public function check(int $number) : bool
    {
        if ($number - $this->RightNumber < 10 && $number - $this->RightNumber > -10) {
            echo "You're lucky. The correct number was ".$this->RightNumber."{ Level: Easy }"."\n";
            return true;
        }

        return parent::check($number);
    }
}
