<?php

namespace spec;

use Greeter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreeterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Greeter::class);
    }

    function it_should_say_hello()
    {
        $this->greet()->shouldReturn('Hello');
    }

    function it_should_greet_a_person_by_name(\Name $person)
    {
        $person->getName()->willReturn('Bob');

        $this->greet($person)->shouldReturn('Hello Bob');
    }
}
