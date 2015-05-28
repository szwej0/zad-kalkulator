<?php

namespace vincenti\Tools;

class Kalkulator
{
    private $r;
    private $h;
           
    public function setR($r)
    {
         $this->r = $r;

        return $this;
    }
        public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    public function getR()
    {
        return $this->r;
    }

    public function getH()
    {
        return $this->h;
    }



    public function sum()
    {
            return $this->r * $this->h * 6.28;

    }
}
