<?php

namespace spec\furtakm\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RectangleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('furtakm\Tools\Rectangle');
    }
    
    function it_should_calculate_rectangle_area()
    {
        $this->setA(5)->setB(7)->rectangle()->shouldReturn(35);
    }
}
