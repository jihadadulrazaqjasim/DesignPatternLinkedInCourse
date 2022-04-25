<?php

namespace Phppractice\FactoryPattern_Challenge;

class ZoneFactory
{
    private Zone $zone;
    public function createZone($zoneid): Zone
    {
        if ($zoneid == "US/Pacific")
            $this->zone = new ZoneUsPacific();
        elseif ($zoneid == "US/Central")
            $this->zone = new ZoneUsCentral();
        elseif($zoneid="US/Eastern")
            $this->zone = new ZoneUsEastern();
            
        return $this->zone;
    }
}
