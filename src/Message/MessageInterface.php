<?php

declare (strict_types = 1);

namespace HMLB\DDD\Message;

use SimpleBus\Message\Name\NamedMessage;

/**
 * A message used in DDD message bus architecture.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
interface MessageInterface extends NamedMessage
{
}
