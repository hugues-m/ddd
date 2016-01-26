<?php
declare(strict_types = 1);

namespace HMLB\DDD\Entity;

use HMLB\DDD\Exception\AggregateRootNotFoundException;

/**
 * Repository for a domain Aggregate Root.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
interface Repository
{
    /**
     * Adds an AggregateRoot to the Repository.
     *
     * @param AggregateRoot $aggregateRoot
     *
     * @return void
     */
    public function add(AggregateRoot $aggregateRoot);

    /**
     * @param Identity $identity
     *
     * @return AggregateRoot
     *
     * @throws AggregateRootNotFoundException
     */
    public function get(Identity $identity): AggregateRoot;

    /**
     * @return AggregateRoot[]
     */
    public function getAll(): array;

    /**
     * The fully qualified class name of the managed AggregateRoot.
     *
     * @return string
     */
    public function getClassName(): string;
}
