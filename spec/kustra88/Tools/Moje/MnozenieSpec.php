<?php

namespace spec\kustra88\Tools\Moje;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kustra88\Tools\Moje\Mnozenie');
    }
}
