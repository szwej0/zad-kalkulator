<?php

namespace verenichvlad\Tools;

class Square
{
    public $a;
    
    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function area()
    {
        return $this->a * $this->a; 
    }
}
