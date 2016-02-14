<?php
declare (strict_types = 1);

namespace HMLB\DDD\Tests\Message;

use PHPUnit_Framework_TestCase;

/**
 * MessageTest.
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
