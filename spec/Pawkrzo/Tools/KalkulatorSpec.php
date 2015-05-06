<?php

namespace spec\Pawkrzo\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pawkrzo\Tools\Kalkulator');
    }
}
