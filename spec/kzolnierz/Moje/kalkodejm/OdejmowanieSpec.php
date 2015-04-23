<?php

namespace spec\kzolnierz\Moje\kalkodejm;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OdejmowanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kzolnierz\Moje\kalkodejm\Odejmowanie');
    }
}
