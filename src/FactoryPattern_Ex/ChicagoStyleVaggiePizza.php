<?php

namespace Phppractice\FactoryPattern_Ex;

class ChicagoStyleVaggiePizza extends Pizza
{
    public function prepare()
    {
        echo "I am preparing Chicago Style Vaggie Pizza<br>";
    }

    public function bake()
    {
        echo "I am baking Chicago Style Vaggie Pizza<br>";
    }

    public function cut()
    {
        echo "I am cutting Chicago Style Vaggie Pizza<br>";
    }

    public function box()
    {
        echo "I am boxing Chicago Style Vaggie Pizza<br>";
    }
}
