<?php

namespace Phppractice\DecoratorPattern_Challenge;

class Cheese extends ToppingsDecorator
{
    private Pizza $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription()
    {
        return $this->pizza->getDescription() . ", Cheese";
    }

    public function cost()
    {
        return $this->pizza->cost() + 2.00;
    }
}
