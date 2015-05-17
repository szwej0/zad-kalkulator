<?php

namespace spec\rafalnav\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class poletrojkataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('rafalnav\Tools\poletrojkata');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
    function it_should_calculate_field()
    {
        $this->setA(5)->setB(2)->field()->shouldReturn(5.0);
    }
}
