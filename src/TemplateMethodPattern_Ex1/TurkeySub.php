<?php

namespace Phppractice\TemplateMethodPattern_Ex1;

class TurkeySub extends Sub
{
    public function addPrimaryToppings()
    {
        echo "Adding turkey sub ";
        return $this;
    }
}
