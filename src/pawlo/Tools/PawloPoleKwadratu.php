<?php

namespace pawlo\Tools;

class PawloPoleKwadratu
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

    public function area()
    {
        return $this->a*$this->a;
    }
}
