<?php

namespace HMLB\DDD\Exception;

/**
 * AggregateRootNotFoundException.
 *
 * Used in repositories when we should get a result and we don't.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class AggregateRootNotFoundException extends Exception
{
}
