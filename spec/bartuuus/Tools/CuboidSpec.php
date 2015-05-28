<?php

namespace spec\bartuuus\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('bartuuus\Tools\Cuboid');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(11)->getA()->shouldReturn(11);
        $this->setB(22)->getB()->shouldReturn(22);
        $this->setH(33)->getH()->shouldReturn(33);
    }

    function it_should_calculate_volume()
    {
        $this->setA(3)->setB(4)->setH(5)->volume()->shouldReturn(60);
    }
}
