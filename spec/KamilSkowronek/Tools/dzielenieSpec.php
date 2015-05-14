<?php

namespace spec\KamilSkowronek\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class dzielenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('KamilSkowronek\Tools\dzielenie');
    }
}
