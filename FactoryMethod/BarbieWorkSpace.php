<?php

namespace FactoryMethod;

abstract class BarbieWorkSpace
{
    /**
     * @return Barbie
     * Factory Method
     */
    abstract public function createBarbie(string $clothes) : Barbie;

    public function play(): void
    {
        echo "playing with Barbie" . PHP_EOL;
    }
}