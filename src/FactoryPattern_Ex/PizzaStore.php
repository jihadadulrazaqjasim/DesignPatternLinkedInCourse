<?php

namespace Phppractice\FactoryPattern_Ex;

abstract class PizzaStore
{
    abstract function createPizza($type):Pizza;

    public function orderPizza($type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
