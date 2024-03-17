<?php

namespace FactoryMethod;

class BarbieSeamstress extends Barbie
{

    public function work(): void
    {
        echo "Making a dress" . PHP_EOL;
    }
}