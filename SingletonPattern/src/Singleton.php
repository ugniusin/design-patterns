<?php

namespace SingletonPattern;

class Singleton
{
    /** @var Singleton */
    private static $instance;

    /** @var string */
    private $key;

    private function __construct() {
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (self::$instance) {
            return self::$instance;
        }

        self::$instance = new self;

        return self::$instance;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key)
    {
        $this->key = $key;
    }
}
