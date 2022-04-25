<?php

namespace Phppractice\FactoryPattern_Ex;

class ChicagoStyleCheesePizza extends Pizza
{
    public function prepare()
    {
        echo "I am preparing Chicago Style Cheese Pizza<br>";
    }

    public function bake()
    {
        echo "I am baking Chicago Style Cheese Pizza<br>";
    }

    public function cut()
    {
        echo "I am cutting Chicago Style Cheese Pizza<br>";
    }

    public function box()
    {
        echo "I am boxing Chicago Style Cheese Pizza<br>";
    }
}
