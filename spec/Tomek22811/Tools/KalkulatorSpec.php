<?php

namespace spec\Tomek22811\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Tomek22811\Tools\Kalkulator');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(111)->getA()->shouldReturn(111);
        $this->setB(333)->getB()->shouldReturn(333);
    }
}
