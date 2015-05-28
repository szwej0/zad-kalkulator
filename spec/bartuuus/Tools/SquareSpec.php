<?php

namespace spec\bartuuus\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SquareSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('bartuuus\Tools\Square');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(111)->getA()->shouldReturn(111);
    }

    function it_should_calculate_area()
    {
        $this->setA(5)->area()->shouldReturn(25);
    }
}
