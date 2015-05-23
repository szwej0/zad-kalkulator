<?php

namespace spec\pawlo\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PawloPoleKwadratuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pawlo\Tools\PawloPoleKwadratu');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);

    }
    
    function it_should_calculate_area()
    {
        $this->setA(2)->area()->shouldReturn(4);
    }
}
