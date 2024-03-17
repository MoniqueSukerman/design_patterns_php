<?php

namespace FactoryMethod;

abstract class Barbie
{
    protected string $clothes;

    /**
     * @param string $clothes
     */
    public function __construct(string $clothes)
    {
        $this->clothes = $clothes;
    }


    abstract public function work();
}