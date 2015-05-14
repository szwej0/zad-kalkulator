<?php

namespace spec\kzolnierz\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PolekwadratuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kzolnierz\Tools\Polekwadratu');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(5)->getA()->shouldReturn(5);
    }
    
    function it_should_calculate_squared()
{
    $this->setA(5)->squared()->shouldReturn(25);
}
}
