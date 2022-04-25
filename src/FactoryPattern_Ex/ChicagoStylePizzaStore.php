<?php

namespace Phppractice\FactoryPattern_Ex;

class ChicagoStylePizzaStore extends PizzaStore
{
    public function createPizza($type): Pizza
    {
        if ($type == "cheese")
            return new ChicagoStyleCheesePizza();

        elseif ($type == "vaggie")
            return new ChicagoStyleVaggiePizza();

        elseif ($type == "clam")
            return new ChicagoStyleClamPizza();
    }
}
