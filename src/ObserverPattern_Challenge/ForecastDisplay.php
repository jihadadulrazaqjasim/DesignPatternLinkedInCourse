<?php

namespace Phppractice\ObserverPattern_Challenge;

class ForecastDisplay implements Observer
{
    private float $currentPressure = 29.92;
    private float $lastPressure;

    private Subject $subject;

    function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $subject->registerObserver($this);
    }

    public function update(float $temperature, float $windSpeed, float $pressure)
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }

    public function display()
    {
        echo "<br>---Forecast--- <br>";
        if ($this->currentPressure > $this->lastPressure)
            echo "Improving weather on the way!";
        if ($this->currentPressure == $this->lastPressure)
            echo "More of the same";
        if ($this->currentPressure < $this->lastPressure)
            echo "Watch out for cooler, rainy weather";
    }
}
