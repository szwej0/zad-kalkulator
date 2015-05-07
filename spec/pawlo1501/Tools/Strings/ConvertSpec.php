<?php

namespace spec\pawlo1501\Tools\Strings;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pawlo1501\Tools\Strings\Convert');
    }
     function it_should_contain_setter_and_getter_for_a_string()
    {
        $this->setStr('pawel')->getStr()->shouldReturn('pawel');
    }
    
     function it_should_convert_string_to_lower_case()
    {
        $this->setStr('Pawel')->toLower()->shouldReturn('pawel');
    }

     function it_should_convert_string_to_upper_case()
    {
        $this->setStr('Pawel')->toUpper()->shouldReturn('PAWEL');
    }
     function it_should_convert_string_to_ucfirst_case()
    {
        $this->setStr('pawel')->ucfirst()->shouldReturn('Pawel');
    }
}
