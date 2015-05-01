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
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
    
    function it_should_calculate_multiplication()
    {   
    $this->setA(2)->setB(2)->multiplication()->shouldReturn(4);
    }
}
