<?php

namespace spec\palina888\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProstopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('palina888\Tools\Prostopadloscian');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(456)->getH()->shouldReturn(456);
    }
    
    function it_should_calculate_prostopadloscian()
    {
        $this->setA(3)->setB(4)->setH(5)->prostopadloscian()->shouldReturn(60);
    }

}
