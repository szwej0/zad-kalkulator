<?php

namespace spec\Golabm1993\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Golabm1993\Tools\Kalkulator');
    }
}
