<?php

namespace spec\gosialeszczuk\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('gosialeszczuk\Tools\Pole');
    }
    
     function it_should_have_setter_and_gettter()
    {
        $this->setA(456)->getA()->shouldReturn(456);
        $this->setB(963)->getB()->shouldReturn(963);
    }
    
    function it_should_calculate_area()
{
    $this->setA(3)->setB(4)->area()->shouldReturn(12);
}
    
}
