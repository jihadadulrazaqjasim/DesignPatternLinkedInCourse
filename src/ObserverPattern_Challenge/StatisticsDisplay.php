<?php

namespace Phppractice\ObserverPattern_Challenge;

class StatisticsDisplay implements Observer, DisplayElement
{
    private float $minTemp = 200;
    private float $maxTemp = 0;
    private float $tempSum = 0;
    private int $numReadings = 0;

    private Subject $subject;

    function __construct(Subject $subj)
    {
        $this->subject = $subj;
        $subj->registerObserver($this);
    }

    public function update(float $temp, float $windS, float $pres)
    {
        $this->tempSum = $this->tempSum +  $temp;
        $this->numReadings++;

        if ($temp > $this->maxTemp)
            $this->maxTemp = $temp;

        if ($temp < $this->minTemp)
            $this->minTemp = $temp;

        $this->display();
    }

    public function display()
    {
        echo "<br>----Statistics----<br>";
        echo "Aver/Max/Min Temperature = " . ($this->tempSum / $this->numReadings) . " / " . ($this->maxTemp) . " / " . ($this->minTemp);
    }
}
