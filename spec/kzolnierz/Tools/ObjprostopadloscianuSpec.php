<?php

namespace spec\kzolnierz\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ObjprostopadloscianuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kzolnierz\Tools\Objprostopadloscianu');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(4)->getA()->shouldReturn(4);
        $this->setB(3)->getB()->shouldReturn(3);
        $this->setC(2)->getC()->shouldReturn(2);
    }
    
    function it_should_calculate_obj()
{
    $this->setA(4)->setB(3)->setC(2)->obj()->shouldReturn(24);
}
}
