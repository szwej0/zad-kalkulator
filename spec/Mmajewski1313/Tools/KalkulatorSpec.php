<?php

namespace spec\Mmajewski1313\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mmajewski1313\Tools\Kalkulator');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
    
    function it_should_calculate_sum()
    {
        $this->setA(7)->setB(7)->sum()->shouldReturn(14);
    }
    
    function my_add()
    {
        $this->add(5,8)->shouldReturn(13);
    }
}
