<?php

namespace Phppractice\DecoratorPattern_Ex;

abstract class Beverage
{
    private $description = "Unknown description";

    public function getDescription()
    {
        return $this->description;
    }

    public abstract function cost();
}
