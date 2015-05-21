<?php

namespace spec\szwej0\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleProstopadloscianuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('szwej0\Tools\PoleProstopadloscianu');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(433)->getH()->shouldReturn(433);
    }
    function it_should_calculate_objPP()
    {
        $this->setA(3)->setB(4)->setH(5)->objPP()->shouldReturn(60);
    }
}
