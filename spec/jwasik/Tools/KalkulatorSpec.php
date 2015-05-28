<?php

namespace spec\jwasik\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('jwasik\Tools\Kalkulator');
    }
}
