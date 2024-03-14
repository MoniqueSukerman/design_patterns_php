<?php

namespace TemplateMethod;

abstract class AbstractFoodPreparation
{
    public function __construct()
    {
    }


    /**
     * MetodoTemplate
     * @return void
     */
    public function prepareFood()
    {
        $this->washVegetables();
        $this->cutIngredients();
        $this->cook();
        $this->serve();
    }

    abstract protected function washVegetables();
    abstract protected function cutIngredients();
    abstract protected function cook();
    abstract protected function serve();
}