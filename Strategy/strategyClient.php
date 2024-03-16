<?php

require_once 'autoloader.php';

use Strategy\BankSlipStrategy;
use Strategy\CreditCardStrategy;
use Strategy\FinacialOperations;
use Strategy\PixStrategy;

$bankSlip = new BankSlipStrategy();
$pix = new PixStrategy();
$creditCard = new CreditCardStrategy();

$financialOperations = new FinacialOperations();

$financialOperations->setStrategy($bankSlip);

$financialOperations->doPayment(20);

$financialOperations->setStrategy($pix);

$financialOperations->doPayment(25);

$financialOperations->setStrategy($creditCard);

$financialOperations->doPayment(29);

