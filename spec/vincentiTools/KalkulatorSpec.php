<?php

namespace spec\vincentiTools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('vincentiTools\Kalkulator');
    }
}
