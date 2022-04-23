<?php

namespace Phppractice\ObserverPattern_Challenge;

class WeatherData implements Subject
{
    private float $temperature;
    private float $windSpeed;
    private float $pressure;

    private $observers;

    function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $o)
    {
        array_push($this->observers, $o);
    }

    public function removeObserver(Observer $o)
    {
        if (($key = array_search($o, $this->observers)) != false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->windSpeed, $this->pressure);
        }
    }

    public function setMeasurements(float $temperature, float $windSpeed, float $pressure)
    {
        $this->temperature = $temperature;
        $this->windSpeed = $windSpeed;
        $this->pressure = $pressure;
        $this->notifyObservers();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    public function getPressure()
    {
        return $this->pressure;
    }
}
