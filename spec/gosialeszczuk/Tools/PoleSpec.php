<?php

namespace spec\gosialeszczuk\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('gosialeszczuk\Tools\Pole');
    }
}
