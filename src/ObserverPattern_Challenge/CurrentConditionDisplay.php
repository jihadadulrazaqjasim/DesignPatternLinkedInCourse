<?php

namespace Phppractice\ObserverPattern_Challenge;

class CurrentConditionDisplay implements Observer, DisplayElement
{

    private float $temperature;
    private float $windSpeed;
    private float $pressure;

    private Subject $subject;

    function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $subject->registerObserver($this);
    }

    public function update(float $temp, float $windS, float $pres)
    {
        $this->temperature = $temp;
        $this->windSpeed = $windS;
        $this->pressure = $pres;

        $this->display();
    }

    public function display()
    {
        echo "<br>----Current measurements----<br>";
        echo "Temp: " . $this->temperature . ", windSpeed: " . $this->windSpeed . ", Pressure: " . $this->pressure;
    }
}
