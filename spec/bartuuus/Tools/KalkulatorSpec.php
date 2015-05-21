<?php

namespace spec\bartuuus\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('bartuuus\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(111)->getA()->shouldReturn(111);
        $this->setB(981)->getB()->shouldReturn(981);
    }

    function it_should_calculate_sum()
    {
        $this->setA(8)->setB(8)->sum()->shouldReturn(16);
    }
}
