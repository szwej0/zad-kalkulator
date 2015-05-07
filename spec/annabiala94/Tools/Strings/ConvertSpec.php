<?php

namespace spec\annabiala94\Tools\Strings;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('annabiala94\Tools\Strings\Convert');
    }
    
    function it_should_contain_setter_and_getter_for_a_string()
    {
        $this->setStr('lorem')->getStr()->shouldReturn('lorem');
    }
    
     function it_should_convert_string_to_lower_case()
    {
        $this->setStr('LoReM')->toLower()->shouldReturn('lorem');
    }
    
     function it_should_convert_string_to_upper_case()
    {
        $this->setStr('LoReM')->toUpper()->shouldReturn('LOREM');
    }
    
    function it_should_convert_uc_first_case()
    {
        $this->setStr('lorem')->ucfisrt()->shouldReturn('Lorem');
    }
}
