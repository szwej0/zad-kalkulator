<?php

namespace spec\FurtakM\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OdejmowanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('FurtakM\Tools\Odejmowanie');
    }
}
