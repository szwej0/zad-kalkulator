<?php

namespace spec\barteko2\Tools\Strings;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('barteko2\Tools\Strings\Convert');
    }
}
