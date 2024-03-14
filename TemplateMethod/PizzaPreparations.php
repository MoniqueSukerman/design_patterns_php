<?php

namespace TemplateMethod;

use TemplateMethod\AbstractFoodPreparation;

class PizzaPreparations extends AbstractFoodPreparation
{

    protected function washVegetables()
    {
        echo "Washing tomatoes and onions" . PHP_EOL;
    }

    protected function cutIngredients()
    {
        echo "Cutting tomatoes and onions" . PHP_EOL;
    }

    protected function cook()
    {
        echo "Bake the pizza in the oven" . PHP_EOL;
    }

    protected function serve()
    {
        echo "Slice the pizza and serve" . PHP_EOL;
    }
}