<?php

namespace Phppractice\FactoryPattern_Challenge;

class ZoneUsEastern extends Zone
{

    function __construct()
    {
        $this->displayName="US/Eastern";
        $this->offset= -9;
    }
}
