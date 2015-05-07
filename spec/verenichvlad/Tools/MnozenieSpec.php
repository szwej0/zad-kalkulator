<?php

namespace spec\verenichvlad\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('verenichvlad\Tools\Mnozenie');
    }
}
