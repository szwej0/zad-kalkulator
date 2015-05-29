<?php

namespace spec\jwasik\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('jwasik\Tools\Cuboid');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(4)->getA()->shouldReturn(4);
        $this->setB(7)->getB()->shouldReturn(7);
        $this->setH(11)->getH()->shouldReturn(11);
    }
    
    function it_should_calculate_volume()
    {
        $this->setA(2)->setB(4)->setH(6)->volume()->shouldReturn(48);
    }
}
