<?php

namespace spec\challenges;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SumUpSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('challenges\SumUp');
    }

}
