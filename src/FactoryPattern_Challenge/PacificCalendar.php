<?php

namespace Phppractice\FactoryPattern_Challenge;

class PacificCalendar extends Calendar
{

    function __construct(ZoneFactory $zonefactory)
    {
        $this->zone = $zonefactory->createZone('US/Pacific');
    }
    public function createCalendar($appointments)
    {

    }
}
