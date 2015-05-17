<?php

namespace spec\kamilstrzelecki\Tools\kalkulator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilstrzelecki\Tools\kalkulator\Kalkulator');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setX(25)->getX()->shouldReturn(25);
        $this->setY(26)->getY()->shouldReturn(26);
        $this->setZ(27)->getZ()->shouldReturn(27);
    }
    
    function it_should_calculate_add()
    {
        $this->setX(2)->setY(3)->setZ(4)->add()->shouldReturn(9);
    }
}
