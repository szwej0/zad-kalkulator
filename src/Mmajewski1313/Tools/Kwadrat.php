<?php

namespace Mmajewski1313\Tools;

class Kwadrat
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
