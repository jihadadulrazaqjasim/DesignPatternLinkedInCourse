<?php

namespace Phppractice\AdapterPattern_Challenge;

use Phppractice\AdapterPattern_Ex1\Duck;

class DroneAdapter implements Duck
{

    public Drone $drone;

    function  __construct(Drone $drone)
    {
        $this->drone = $drone;
    }

    public function quack()
    {
        $this->drone->beep();
    }

    function fly()
    {
        $this->drone->spin_rotors();
        $this->drone->take_off();
    }
}
