<?php

namespace Strategy;

interface PaymentStrategy
{
    public function doPayment(float $value);
}