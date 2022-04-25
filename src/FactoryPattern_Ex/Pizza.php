<?php

namespace Phppractice\FactoryPattern_Ex;

abstract class Pizza
{
    abstract function prepare();
    abstract function bake();
    abstract function cut();
    abstract function box();
}