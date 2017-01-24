<?php

declare (strict_types = 1);

namespace HMLB\DDD\Exception;

use Assert\AssertionFailedException as AssertionException;
use Assert\InvalidArgumentException as BaseException;

/**
 * A necessary specification failed.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class AssertionFailedException extends BaseException implements AssertionException
{
}
