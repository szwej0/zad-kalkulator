<?php

namespace spec\krzysztof90\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysztof90\Tools\Mnozenie');
    }
}
