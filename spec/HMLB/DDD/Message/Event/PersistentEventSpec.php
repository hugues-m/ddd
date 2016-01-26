<?php

namespace spec\HMLB\DDD\Message\Command;

use HMLB\DDD\Entity\Identity;
use HMLB\DDD\Exception\PersistentMessageWithoutIdentityException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersistentEventSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('HMLB\DDD\Message\Event\PersistentEvent');
    }

    function it_throws_exception_when_no_id_is_set()
    {
        $this->shouldThrow(PersistentMessageWithoutIdentityException::class)->during('getId');
    }

    function identity_can_be_initialized()
    {
        $this->initializeId();
        $this->getId()->shouldBeAnInstanceOf(Identity::class);
    }
}
