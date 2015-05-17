<?php

namespace kamilstrzelecki\Tools\kalkulator;

class Kalkulator
{

    public $x;
    public $y;
    public $z;


    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setZ($z)
    {
        $this->z = $z;
        return $this;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function add()
    {
        return $this->x + $this->y + $this->z;
    }
}
