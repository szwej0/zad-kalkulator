<?php

namespace spec\Dzenziur\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dzenziur\Tools\Kalkulator');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
    function add()
    {
        $this->setA(9)->setB(3)->add()->shouldReturn(12);
    }
}
