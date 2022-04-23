<?php

namespace Phppractice\DecoratorPattern_Challenge;

class ThinCrustPizza extends Pizza
{
    private $description;

    public function __construct()
    {
        $this->description = "Thin Crust Pizza";
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 5.00;
    }
}
