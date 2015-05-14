<?php

namespace spec\krzysztof90\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProstopSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysztof90\Tools\Prostop');
    }
		
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setC(287)->getC()->shouldReturn(287);
    }

    function it_should_calculate_volume()
    {
        $this->setA(5)->setB(7)->setC(4)->volume()->shouldReturn(140);
    }
		
}
