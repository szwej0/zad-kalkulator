<?php

namespace spec\szwej0\tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class kalkulatormnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('szwej0\tools\kalkulatormnozenie');
    }
}
