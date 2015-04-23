<?php

namespace spec\Shuwax\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OdejmowanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Shuwax\Tools\Odejmowanie');
    }
}
