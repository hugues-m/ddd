<?php

declare (strict_types = 1);

namespace HMLB\DDD\Entity;

/**
 * A domain model that is an entry point for domain API.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
interface AggregateRoot extends Entity
{
    /**
     * Must return the Identity of the Aggregate Root.
     *
     * @return Identity
     */
    public function getId(): Identity;
}
