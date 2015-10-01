<?php

namespace spec\HMLB\DDD\Message;

use PhpSpec\ObjectBehavior;

class MessageSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('HMLB\DDD\Message\Message');
    }

    public function it_guesses_message_name()
    {
        $this::messageName()->shouldReturn('message');
    }
}
