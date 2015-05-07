<?php

namespace spec\krzysztof90\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysztof90\Tools\Kalkulator');
    }
		
		function it_should_have_setter_and_gettter()
    {
        $this->setA(1500)->getA()->shouldReturn(1500);
        $this->setB(100)->getB()->shouldReturn(100);
    }

    function it_should_calculate_sum()
    {
        $this->setA(1500)->setB(100)->sum()->shouldReturn(1600);
    }
		
    function it_should_calculate_multiplicate()
    {
        $this->setA(45)->setB(6)->multiplicate()->shouldReturn(270);
    }
		
		function it_should_calculate_subtract()
    {
        $this->setA(12)->setB(9)->subtract()->shouldReturn(3);
    }
		
}
