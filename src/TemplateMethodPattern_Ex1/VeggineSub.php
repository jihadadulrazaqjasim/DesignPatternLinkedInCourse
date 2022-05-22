<?php

namespace Phppractice\TemplateMethodPattern_Ex1;

class VeggineSub extends Sub
{
    public function addPrimaryToppings()
    {
        echo "Adding vaggie sub ";
        return $this;
    }
}
