<?php

namespace kamajo5\Tools;

class Mnozenie
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

    public function objetosc()
    {
        return $this->a * $this->b ;
    }
} 
