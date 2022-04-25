<?php

namespace Phppractice\FactoryPattern_Ex;

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza($type): Pizza
    {
        if ($type == "cheese")
            return new NYStyleCheesePizza;
        elseif ($type == "veggine")
            return new NYStyleVaggiePizza();
        elseif ($type == "clam")
            return new NYStyleClamPizza();
    }
}
