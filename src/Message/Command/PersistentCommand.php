<?php
declare(strict_types = 1);

namespace HMLB\DDD\Message\Command;

use HMLB\DDD\Persistence\PersistentMessage;
use HMLB\DDD\Persistence\PersistentMessageCapabilities;

/**
 * PersistentCommand
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class PersistentCommand extends Command implements PersistentMessage
{
    use PersistentMessageCapabilities;
}
