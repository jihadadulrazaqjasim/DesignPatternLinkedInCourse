<?php

namespace Phppractice\DecoratorPattern_Ex;

class Whip extends CondimentDecorator
{
    private Beverage $beverage;

    function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost()
    {
       return $this->beverage->cost() + 0.2;
    }
}
