<?php

namespace spec\Pawkrzo\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pawkrzo\Tools\Kalkulator');
    }
     function it_should_have_setter_and_gettter()
    {
        $this->setA(444)->getA()->shouldReturn(444);
        $this->setB(666)->getB()->shouldReturn(666);
    }
    function it_should_calculate_sum()
{
    $this->setA(4)->setB(6)->sum()->shouldReturn(10);
}
}
