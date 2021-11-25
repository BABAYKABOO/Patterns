<?php


namespace Behaviour\COR;


class Hard extends Guess
{

    public function check(int $number) : bool
    {
        if ($number == $this->RightNumber ||
            $number - $this->RightNumber < 3 && $number - $this->RightNumber > -3) {
            echo "You're really lucky. The correct number was ".$this->RightNumber."{ Level: Hard }"."\n";

            return true;
        }

        return parent::check($number);
    }
}
