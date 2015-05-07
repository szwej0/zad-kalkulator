<?php

namespace kzolnierz\Moje\kalkodejm;

class Odejmowanie
{
    private $a;
    private $b;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }


    public function subtraction()
    {
        return $this->a - $this->b;
    }
}
