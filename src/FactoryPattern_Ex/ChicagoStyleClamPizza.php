<?php

namespace Phppractice\FactoryPattern_Ex;

class ChicagoStyleClamPizza extends Pizza
{
    public function prepare()
    {
        echo "I am preparing Chicago Style Clam Pizza<br>";
    }

    public function bake()
    {
        echo "I am baking Chicago Style Clam Pizza<br>";
    }

    public function cut()
    {
        echo "I am cutting Chicago Style Clam Pizza<br>";
    }

    public function box()
    {
        echo "I am boxing Chicago Style Clam Pizza<br>";
    }
}
