<?php

namespace Singleton;

class Singleton
{
    static private ?Singleton $instance = null;

    private function __construct()
    {
    }

    public static function getSingleton(): Singleton
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}