<?php

namespace spec\furtakm\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VolumeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('furtakm\Tools\Volume');
    }
    
    function it_should_calculate_volume()
    {
        $this->setA(5)->setB(4)->setH(3)->volume()->shouldReturn(60);
    }
}
