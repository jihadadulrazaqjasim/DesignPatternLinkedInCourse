<?php

namespace Phppractice\TemplateMethodPattern_Ex1;

abstract class Sub
{
    // This method is our algorithm, means all calls will be here.
    public function make()
    {
        return $this->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    public function layBread()
    {
        echo "Laying the bread ";
        return $this;
    }

    public function addLettuce()
    {
        echo "Adding the Lettuce ";
        return $this;
    }

    public function addSauces()
    {
        echo "Adding Sauces ";
    }
    abstract function addPrimaryToppings();
}
