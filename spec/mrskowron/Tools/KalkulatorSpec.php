<?php

namespace spec\mrskowron\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('mrskowron\Tools\Kalkulator');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(111)->getA()->shouldReturn(111);
        $this->setB(333)->getB()->shouldReturn(333);
    }
    
    function it_should_calculate_sum()
    {
        $this->setA(5)->setB(1)->sum()->shouldReturn(6);
    }
}
