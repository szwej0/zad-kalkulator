<?php

namespace spec\MateuszCharkot\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MateuszCharkot\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
    }
    
    function it_should_calculate_pkwadrat()

    {
    $this->setA(2)->pkwadrat()->shouldReturn(4);
    }
}