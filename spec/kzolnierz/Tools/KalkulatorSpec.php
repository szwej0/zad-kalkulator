<?php

namespace spec\kzolnierz\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kzolnierz\Tools\Kalkulator');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(10)->getA()->shouldReturn(10);
        $this->setB(7)->getB()->shouldReturn(7);
    }
    
    function it_should_calculate_sum()
    {
    $this->setA(10)->setB(7)->sum()->shouldReturn(17);
    }
}
