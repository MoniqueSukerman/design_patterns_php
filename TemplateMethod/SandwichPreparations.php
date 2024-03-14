<?php

namespace TemplateMethod;

use TemplateMethod\AbstractFoodPreparation;

class SandwichPreparations extends AbstractFoodPreparation
{

    protected function washVegetables()
    {
        echo "Washing tomatoes and lettuce" . PHP_EOL;
    }

    protected function cutIngredients()
    {
        echo "Cutting tomatoes and lettuce" . PHP_EOL;
    }

    protected function cook()
    {
        echo "Roast the burguer" . PHP_EOL;
    }

    protected function serve()
    {
        echo "Assemble the sandwich and serve" . PHP_EOL;
    }
}