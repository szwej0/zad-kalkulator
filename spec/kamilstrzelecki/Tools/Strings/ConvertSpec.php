<?php

namespace spec\kamilstrzelecki\Tools\Strings;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilstrzelecki\Tools\Strings\Convert');
    }
    
    function it_should_contain_setter_and_getter_for_a_string()
    {
        $this->setStr('kamil')->getStr()->shouldReturn('kamil');
    }
    
    function it_should_convert_string_to_lower_case()
    {
        $this->setStr('Kamil')->toLower()->shouldReturn('kamil');
    }
    
    function it_should_convert_string_to_upper_case()
    {
        $this->setStr('Kamil')->toUpper()->shouldReturn('KAMIL');
    }
    
    function it_should_convert_string_to_ucfirst_case()
    {
        $this->setStr('kamil')->ucfirst()->shouldReturn('Kamil');
    }
    
    
}
