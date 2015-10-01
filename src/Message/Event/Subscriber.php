<?php

namespace HMLB\DDD\Message\Event;

/**
 * Listens to domain events.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
interface Subscriber
{
    public function notify(Event $event);
}
