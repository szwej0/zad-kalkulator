<?php

namespace spec\pawlo1501\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pawlo1501\Tools\Kalkulator');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(12)->getA()->shouldReturn(12);
        $this->setB(9)->getB()->shouldReturn(9);
    }
    function it_should_calculate_sum()
    {
        $this->setA(5)->setB(7)->sum()->shouldReturn(12);
    }
}
