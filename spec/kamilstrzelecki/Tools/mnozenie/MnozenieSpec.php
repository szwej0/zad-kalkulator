<?php

namespace spec\kamilstrzelecki\Tools\mnozenie;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilstrzelecki\Tools\mnozenie\Mnozenie');
    }
}
