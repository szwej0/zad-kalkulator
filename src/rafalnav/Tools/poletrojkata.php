<?php

namespace rafalnav\Tools;

class poletrojkata
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


    public function field()
    {
        return $this->a * $this->b * 0.5;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
}
