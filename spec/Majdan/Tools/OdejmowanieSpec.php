<?php

namespace spec\Majdan\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OdejmowanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Majdan\Tools\Odejmowanie');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setC(111)->getC()->shouldReturn(111);
    }

    function it_should_calculate_substraction()
{
    $this->setA(22)->setB(11)->setC(2)->substraction()->shouldReturn(9);
}
}
