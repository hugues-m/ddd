<?php

declare (strict_types = 1);

namespace HMLB\DDD\Persistence;

use HMLB\DDD\Entity\Identity;
use HMLB\DDD\Exception\PersistentMessageWithoutIdentityException;

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
     * @throws PersistentMessageWithoutIdentityException
     */
    public function getId(): Identity
    {
        if (null === $this->id) {
            throw new PersistentMessageWithoutIdentityException(get_class($this).'::$id has not been initialized');
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
