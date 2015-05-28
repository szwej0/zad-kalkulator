<?php

namespace spec\Majdan\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DzielenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Majdan\Tools\Dzielenie');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setC(222)->getC()->shouldReturn(222);
        $this->setD(333)->getD()->shouldReturn(333);
    }

    function it_should_divide()
	{
  	  $this->setA(100)->setB(2)->setC(2)->setD(5)->divide()->shouldReturn(5);
	}
}
