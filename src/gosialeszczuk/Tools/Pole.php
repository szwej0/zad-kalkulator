<?php

namespace gosialeszczuk\Tools;

class Pole
{   public $a;
    public $b;

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


    public function area()
    {
        return $this->a * $this->b;
    }
}
