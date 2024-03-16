<?php

namespace Strategy;

use Strategy\PaymentStrategy;

class PixStrategy implements PaymentStrategy
{
    public function doPayment(float $value): void
    {
        echo "Pay {$value} with pix" . PHP_EOL;
    }
}