<?php

namespace Phppractice\FactoryPattern_Challenge;

class ZoneUsPacific extends Zone
{

    function __construct()
    {
        $this->displayName="US/Pacific";
        $this->offset= -5;
    }
}
