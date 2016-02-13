<?php

declare (strict_types = 1);

namespace HMLB\DDD\Entity;

use HMLB\DDD\Validation\Assertion;
use Ramsey\Uuid\Uuid;

/**
 * Identity of an aggregate root.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class Identity
{
    /**
     * @var string The identifier
     */
    private $id;

    /**
     * @param string $value (optional) For instantiation of an existing Identity
     */
    public function __construct(string $value = null)
    {
        if (null === $value) {
            $this->id = $this->generateId();

            return;
        }

        Assertion::string($value);
        $this->id = $value;
    }

    /**
     * Uses UUID4 for ID generation.
     *
     * @return string
     */
    private function generateId(): string
    {
        return Uuid::uuid4()->toString();
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->id;
    }
}
