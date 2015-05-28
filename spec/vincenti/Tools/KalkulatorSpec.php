<?php

namespace spec\vincenti\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('vincenti\Tools\Kalkulator');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setR(123)->getR()->shouldReturn(123);
        $this->setH(987)->getH()->shouldReturn(987);
    }
    
    function it_should_calculate_walec()
    {
    $this->setR(3)->setH(2)->sum()->shouldReturn(37.68);
    }
}
