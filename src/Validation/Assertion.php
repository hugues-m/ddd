<?php

namespace HMLB\DDD\Validation;

use Assert\Assertion as BaseAssertion;

/**
 * Assertion.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class Assertion extends BaseAssertion
{
    protected static $exceptionClass = 'HMLB\DDD\Exception\AssertionFailedException';
}
