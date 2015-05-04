<?php

namespace spec\kustra88\Tools\Strings;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kustra88\Tools\Strings\Convert');
    }
    
    function it_should_contain_setter_and_getter_for_a_string()
    {
        $this->setStr('piotrek')->getStr()->shouldReturn('piotrek');
    }
    
     function it_should_convert_string_to_lower_case()
    {
        $this->setStr('Piotrek')->toLower()->shouldReturn('piotrek');
    }
}
