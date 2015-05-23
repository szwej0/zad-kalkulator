<?php

namespace spec\pjakimiak\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pjakimiak\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(10)->getA()->shouldReturn(10);
        $this->setB(15)->getB()->shouldReturn(15);
    }
    
    function it_should_calculate_sum()
    {
    $this->setA(10)->setB(15)->sum()->shouldReturn(25);
    }
}
