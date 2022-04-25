<?php

namespace Phppractice\FactoryPattern_Challenge;

abstract class Calendar
{
    protected Zone $zone;
    function print()
    {
        echo "--- " . $this->zone->getDisplayName() . " Calendar ---";
        echo "Offset from GMT: " . $this->zone->getOffset();
        
    }
    abstract function createCalendar($appointments);
}
