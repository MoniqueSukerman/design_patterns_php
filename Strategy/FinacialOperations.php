<?php

namespace Strategy;

/**
 * Contexto
 */
class FinacialOperations
{
    protected PaymentStrategy $strategy;

    public function __construct()
    {
    }

    /**
     * @param mixed $strategy
     */
    public function setStrategy(PaymentStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function doPayment(float $value)
    {
        $this->strategy->doPayment($value);
    }


}