<?php

namespace FactoryMethod;

class BarbieStudio extends BarbieWorkSpace
{

    public function createBarbie(string $clothes): BarbieSeamstress
    {
        return new BarbieSeamstress($clothes);
    }
}