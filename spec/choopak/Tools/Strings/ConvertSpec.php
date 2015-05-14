<?php

namespace spec\choopak\Tools\Strings;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('choopak\Tools\Strings\Convert');
    }
}
