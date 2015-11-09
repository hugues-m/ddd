<?php

namespace HMLB\DDD\Message\Command;

use HMLB\DDD\Entity\Identity;
use HMLB\DDD\Message\Message;

/**
 * An imperative message.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class Command extends Message
{
    /**
     * An Identifier can be issued by middleware for command persistance.
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
