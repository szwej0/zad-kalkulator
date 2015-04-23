<?php

namespace spec\kzolnierz\Moje\kalkmnoz;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kzolnierz\Moje\kalkmnoz\Mnozenie');
    }
}
