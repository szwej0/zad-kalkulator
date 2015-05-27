<?php

namespace spec\krzysiek345\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysiek345\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(5)->getA()->shouldReturn(5);
        $this->setB(7)->getB()->shouldReturn(7);
    }
    
    function it_should_calculate_sum()
    {
        $this->setA(5)->setB(7)->sum()->shouldReturn(12);
    }
}