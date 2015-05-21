<?php
namespace spec\dpyc\Tools\Strings;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('dpyc\Tools\Strings\Convert');
    }
    
    function it_should_contain_setter_and_getter_for_a_string()
    {
        $this->setStr('damian')->getStr()->shouldReturn('damian');
    }
    
     function it_should_convert_string_to_lower_case()
    {
        $this->setStr('Damian')->toLower()->shouldReturn('damian');
    }
    
     function it_should_convert_string_to_upper_case()
    {
        $this->setStr('Damian')->toUpper()->shouldReturn('DAMIAN');
    }
     
     function it_should_convert_string_to_ucfirst_case()
    {
        $this->setStr('damian')->ucfirst()->shouldReturn('Damian');
    }
}