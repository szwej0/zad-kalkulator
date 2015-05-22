<?php

namespace spec\kamilstrzelecki\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilstrzelecki\Tools\Cuboid');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(23)->getA()->shouldReturn(23);
        $this->setB(15)->getB()->shouldReturn(15);
        $this->setH(18)->getH()->shouldReturn(18);
    }
    
    function it_should_calculate_volume()
    {
        $this->setA(3)->setB(4)->setH(5)->volume()->shouldReturn(60);
    }
}
