<?php

namespace Phppractice\DecoratorPattern_Challenge;

class ThickCrustPizza extends Pizza
{

    private $description;

    public function __construct()
    {
        $this->description = "Thick Crust Pizza";
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 10.00;
    }
}
