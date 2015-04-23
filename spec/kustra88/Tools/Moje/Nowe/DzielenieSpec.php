<?php

namespace spec\kustra88\Tools\Moje\Nowe;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DzielenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kustra88\Tools\Moje\Nowe\Dzielenie');
    }
}
