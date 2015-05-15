<?php

namespace spec\annabiala94\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OdejmowanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('annabiala94\Tools\Odejmowanie');
    }
    
       function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setC(139)->getC()->shouldReturn(139);
    }
    
    function it_should_calculate_odejmij()
    {
        $this->setA(25)->setB(5)->setC(2)->odejmowanie()->shouldReturn(18);
    }
}
