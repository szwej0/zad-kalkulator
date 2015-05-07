<?php

namespace spec\barteko2\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('barteko2\Tools\Kalkulator');
    }
}
