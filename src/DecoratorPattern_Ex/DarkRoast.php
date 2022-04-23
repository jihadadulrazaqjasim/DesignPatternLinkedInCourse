<?php

namespace Phppractice\DecoratorPattern_Ex;

class DarkRoast extends Beverage
{

    private $desciption;

    function __construct()
    {
        $this->desciption = "Dark Roast Coffee";
    }
    public function getDescription()
    {
        return $this->desciption;
    }

    public function cost()
    {
        return 0.99;
    }
}
