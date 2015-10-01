<?php

namespace HMLB\DDD\Exception;

/**
 * AggregateRootNotFoundException.
 *
 * Used in AggregateRoots when trying to get an Entity but it can't be found.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class EntityNotFoundException extends Exception
{
}
