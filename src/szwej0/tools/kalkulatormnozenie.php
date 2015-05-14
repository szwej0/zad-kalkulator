<?php

namespace szwej0\tools;

class kalkulatormnozenie

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
    public function add()
    {
        return $this->a * $this->b;
    }

    function it_should_calculate_add()
    {
        $this->setA(2)->setB(3)->add()->shouldReturn(6);
    }


}
