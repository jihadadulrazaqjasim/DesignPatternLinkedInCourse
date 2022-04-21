<?php
namespace Phppractice\DesignPatternLinkedIn\AdapterPattern_Challenge;

class SuperDrone implements Drone {
    
    public function beep()
    {
        echo "I am beeping..";
    }

    public function spin_rotors()
    {
        echo "Here we go..";
    }

    public function take_off()
    {
        echo "take off baby boy";
    }
}
