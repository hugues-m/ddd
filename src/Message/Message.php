<?php

declare (strict_types = 1);

namespace HMLB\DDD\Message;

use HMLB\DDD\Entity\Identity;

/**
 * A simple implementation of a named message.
 *
 * The name will be based on the class name of the message. e.g. : DoSomethingImportant => do_something_imporant
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
class Message implements MessageInterface
{
    /**
     * An Identifier can be issued by middleware for command persistance.
     *
     * @var Identity
     */
    private $id;

    /**
     * @var string[]
     */
    private static $hmlbDDDMessageNamesCache = [];

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::messageName();
    }

    /**
     * @return Identity
     */
    public function getId(): Identity
    {
        return $this->id;
    }

    /**
     * Guesses the message name from the class name.
     * Keeps it in memory after first call.
     * If you want to optimize performance, override this method.
     *
     * @return string
     */
    public static function messageName(): string
    {
        if (array_key_exists($class = static::class, self::$hmlbDDDMessageNamesCache)) {
            return self::$hmlbDDDMessageNamesCache[$class];
        }

        self::$hmlbDDDMessageNamesCache[$class] = $name = static::generateMessageNameFromClassName();

        return $name;
    }

    /**
     * @return string
     */
    protected static function generateMessageNameFromClassName(): string
    {
        $slices = explode('\\', get_called_class());

        return strtolower(preg_replace('/([^A-Z])([A-Z])/', '$1_$2', end($slices)));
    }
}
