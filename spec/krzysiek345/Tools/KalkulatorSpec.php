<?php

namespace spec\krzysiek345\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysiek345\Tools\Kalkulator');
    }
}
