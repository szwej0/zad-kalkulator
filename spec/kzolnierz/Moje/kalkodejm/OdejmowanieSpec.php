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
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(5)->getA()->shouldReturn(5);
        $this->setB(7)->getB()->shouldReturn(7);
    }
    
    function it_should_calculate_subtraction()
    {
    $this->setA(5)->setB(7)->subtraction()->shouldReturn(-2);
    }
}
