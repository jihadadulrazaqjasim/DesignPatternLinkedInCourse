<?php
namespace Phppractice\DesignPatternLinkedIn\AdapterPattern_Ex1;


class MallardDuck implements Duck {

public function quack()
{
    echo "Mallard duck is quacking.";
}

public function fly()
{
    echo "Mallard duck is flying.";
}
}
?>