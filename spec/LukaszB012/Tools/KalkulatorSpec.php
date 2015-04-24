<?php

namespace spec\LukaszB012\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LukaszB012\Tools\Kalkulator');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
    function it_should_calculate_sum()
    {
        $this->setA(5)->setB(7)->sum()->shouldReturn(12);
    }
    function it_should_calculate_subtraction()
    {
        $this->setA(10)->setB(8)->subtraction()->shouldReturn(2);
    }
    function it_should_calculate_multiplication()
    {
        $this->setA(6)->setB(6)->multiplication()->shouldReturn(36);
    }
}
