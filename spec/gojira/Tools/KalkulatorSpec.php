<?php

namespace spec\gojira\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('gojira\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
    
    function it_should_calculate_sum()
    {
        $this->setA(5)->setB(2)->sum()->shouldReturn(7);
    }
    
    function it_should_calculate_subtraction()
    {
        $this->setA(10)->setB(5)->subtraction()->shouldReturn(5);
    }
    function it_should_calculate_multiplication()
    {
        $this->setA(5)->setB(5)->multiplication()->shouldReturn(25);
    }
}
