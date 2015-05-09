<?php

namespace MateuszCharkot\Tools;

class Kalkulator
{
    private $a;

    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }
    
    public function getA()
    {
      return $this->a;  
        
    }
    

    public function pkwadrat()
    {
        return $this->a * $this->a;
    }
}
