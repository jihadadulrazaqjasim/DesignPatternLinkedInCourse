<?php

namespace Phppractice\DecoratorPattern_Ex;

class Mocha extends CondimentDecorator
{
    public Beverage $beverage;

    function  __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.1;
    }
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }
}