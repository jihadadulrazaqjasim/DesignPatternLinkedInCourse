<?php

namespace Phppractice\DecoratorPattern_Challenge;

class Olives extends ToppingsDecorator
{
    private Pizza $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription()
    {
        return $this->pizza->getDescription() . ", Olives";
    }

    public function cost()
    {
        return $this->pizza->cost() + 1.50;
    }
}
