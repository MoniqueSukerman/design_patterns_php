<?php
require_once 'autoloader.php';

use TemplateMethod\PizzaPreparations;
use TemplateMethod\SandwichPreparations;

$pizzaPreparation = new PizzaPreparations();
$sandwichPreparation = new SandwichPreparations();

$pizzaPreparation->prepareFood();

echo PHP_EOL;

$sandwichPreparation->prepareFood();
