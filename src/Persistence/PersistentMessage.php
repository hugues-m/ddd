<?php
declare(strict_types = 1);

namespace HMLB\DDD\Persistence;

use HMLB\DDD\Entity\Identity;

/**
 * A message that will be persisted.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
interface PersistentMessage
{
    /**
     * Returns the message's identity.
     *
     * @return Identity
     */
    public function getId(): Identity;

    /**
     * Create an identity for the message.
     */
    public function initializeId();
}
