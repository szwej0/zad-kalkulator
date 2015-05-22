<?php

namespace spec\kamilstrzelecki\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SquareSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilstrzelecki\Tools\Square');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(23)->getA()->shouldReturn(23);
    }
    
    function it_should_calculate_area()
    {
        $this->setA(4)->area()->shouldReturn(16);
    }
}
