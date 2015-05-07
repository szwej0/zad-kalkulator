<?php

namespace spec\Mmajewski1313\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mmajewski1313\Tools\Kalkulator');
    }
}
