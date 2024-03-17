<?php

namespace FactoryMethod;

class BarbieHospital extends BarbieWorkSpace
{

    public function createBarbie(string $clothes): BarbieDoctor
    {
        return new BarbieDoctor($clothes);
    }

}