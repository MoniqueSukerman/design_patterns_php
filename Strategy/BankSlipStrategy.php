<?php

namespace Strategy;

use Strategy\PaymentStrategy;

class BankSlipStrategy implements PaymentStrategy
{
    public function doPayment(float $value): void
    {
        echo "Pay {$value} with bank slip" . PHP_EOL;
    }
}