<?php

namespace Phppractice\ObserverPattern_Challenge;

interface Observer
{
    function update(float $temperature,float $windSpeed,float $pressure);
}
