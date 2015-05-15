<?php

namespace spec\szwej0\tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class kalkulatormnozenieSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('szwej0\Tools\kalkulatormnozenie');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);
        $this->setB(3)->getB()->shouldReturn(3);
    }
}
