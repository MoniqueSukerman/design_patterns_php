<?php

namespace Strategy;

class CreditCardStrategy implements PaymentStrategy
{
    public function doPayment(float $value): void
    {
        echo "Pay {$value} with credit card" . PHP_EOL;
    }
}