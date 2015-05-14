<?php

namespace spec\kamajo5\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamajo5\Tools\Kalkulator');
    }
    function it_should_have_setter_and_gettter()
    {
    	$this->setA(2)->getA()->shouldReturn(2);
    	$this->setB(2)->getB()->shouldReturn(2);
    }
    function it_should_calculate_field_triangle()
    {
    	$this->setA(2)->setB(2)->triangle()->shouldReturn(4);
    }
}