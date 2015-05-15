<?php

namespace spec\szwej0\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleKwadratuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('szwej0\Tools\PoleKwadratu');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
    }
    function it_should_calculate_pole()
    {
        $this->setA(5)->pole()->shouldReturn(25);
    }
}
