<?php

namespace spec\dpyc\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('dpyc\Tools\Kalkulator');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(234)->getA()->shouldReturn(234);
        $this->setB(876)->getB()->shouldReturn(876);
    }
	function it_should_add()
	{
	    $this->setA(6)->setB(8)->add()->shouldReturn(14);
	}
}
