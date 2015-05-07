<?php

namespace spec\kamilstrzelecki\Tools\kalkulator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilstrzelecki\Tools\kalkulator\Kalkulator');
    }
}
