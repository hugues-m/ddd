<?php
declare(strict_types = 1);

namespace HMLB\DDD\Message\Event;

use HMLB\DDD\Persistence\PersistentMessage;
use HMLB\DDD\Persistence\PersistentMessageCapabilities;

/**
 * PersistentEvent
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class PersistentEvent extends Event implements PersistentMessage
{
    use PersistentMessageCapabilities;
}
