<?php

namespace spec\LukaszB012\Tools\Strings;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LukaszB012\Tools\Strings\Convert');
    }
}
