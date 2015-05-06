<?php

namespace spec\Pawkrzo\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pawkrzo\Tools\Mnozenie');
    }
}
