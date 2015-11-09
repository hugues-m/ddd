<?php

namespace HMLB\DDD\Message\Event;

use HMLB\DDD\Entity\Identity;
use HMLB\DDD\Message\Message;

/**
 * An informative message.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class Event extends Message
{
    /**
     * An Identifier can be issued by middleware for event persistance.
     *
     * @var Identity
     */
    protected $id;

    /**
     * @return Identity
     */
    public function getId()
    {
        return $this->id;
    }
}
