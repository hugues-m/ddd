<?php

namespace tests\Message;

use HMLB\DDD\Tests\Message\DoSomethingImportant;
use HMLB\DDD\Tests\Message\SomethingImportantHappened;
use PHPUnit_Framework_TestCase;

/**
 * MessageTest
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class MessageTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function messagesHaveDefaultNames()
    {
        $this->assertEquals('do_something_important', DoSomethingImportant::messageName());
        $this->assertEquals('something_important_happened', SomethingImportantHappened::messageName());
    }

}
