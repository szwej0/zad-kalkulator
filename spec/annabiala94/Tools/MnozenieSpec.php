<?php

namespace spec\annabiala94\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('annabiala94\Tools\Mnozenie');
    }
    
       function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setC(431)->getC()->shouldReturn(431);
        $this->setD(128)->getD()->shouldReturn(128);
    }
    
       function it_should_calculate_mnozenie()
    {
        $this->setA(1)->setB(2)->setC(3)->setD(4)->mnozenie()->shouldReturn(24);
    }
    
    
}

