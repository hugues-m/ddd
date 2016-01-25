<?php

namespace HMLB\DDD\Persistence;

use HMLB\DDD\Entity\Identity;
use HMLB\DDD\Exception\Exception;

/**
 * Trait PersistentMessageCapability.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
trait PersistentMessageCapabilities
{
    private $id;

    /**
     * Returns the message's identity.
     *
     * @return Identity
     *
     * @throws Exception
     */
    public function getId(): Identity
    {
        if (null === $this->id) {
            throw new Exception('PersistantMessage::$id has not been initialized');
        }

        return $this->id;
    }

    /**
     * Create an identity for the message.
     */
    public function initializeId()
    {
        $this->id = new Identity();
    }
}
