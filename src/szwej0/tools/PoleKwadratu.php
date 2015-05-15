<?php

namespace szwej0\Tools;

class PoleKwadratu
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
    

    public function pole()
    {
        return $this->a*$this->a;
    }
}
