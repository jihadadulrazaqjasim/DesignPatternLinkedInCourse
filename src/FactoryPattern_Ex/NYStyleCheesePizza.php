<?php

namespace Phppractice\FactoryPattern_Ex;

class NYStyleCheesePizza extends Pizza
{
    public function prepare()
    {
        echo "I am preparing New york Style Cheese Pizza <br>";
    }

    public function bake()
    {
        echo "I am baking New york Style Cheese Pizza <br>";
    }

    public function cut()
    {
        echo "I am cut New york Style Cheese Pizza <br>";
    }

    public function box()
    {
        echo "I am boxing New york Style Cheese Pizza <br>";
    }
}
