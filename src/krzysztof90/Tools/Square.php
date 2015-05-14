<?php

namespace krzysztof90\Tools;

class Square
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


    public function area()
    {
        return $this->a * $this->b;
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