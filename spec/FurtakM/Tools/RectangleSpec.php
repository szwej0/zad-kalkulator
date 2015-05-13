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
}
