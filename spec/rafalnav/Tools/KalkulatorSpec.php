<?php

namespace spec\rafalnav\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('rafalnav\Tools\Kalkulator');
    }
}
