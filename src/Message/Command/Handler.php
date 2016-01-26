<?php
declare(strict_types = 1);

namespace HMLB\DDD\Message\Command;

/**
 * Responsible for handling modifications to the domain model.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
interface Handler
{
    public function handle(Command $command);
}
