<?php

namespace pawkrzo\Tools;

class Polekwadratu
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

    public function squared()
    {
        return $this->a * $this->a;
    }
}
