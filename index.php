<?php

use Phppractice\StrategyPattern\{CameraAppPlus, SocialMedia};
use Phppractice\AdapterPattern_Ex1\{Duck, MallardDuck, TurkeyAdapter, WildTurkey};

use  Phppractice\AdapterPattern_Challenge\{DroneAdapter, SuperDrone};
use Phppractice\ObserverPattern_Ex\{SimpleObserver, SimpleSubject};

use Phppractice\ObserverPattern_Challenge\{WeatherData, CurrentConditionDisplay, ForecastDisplay, StatisticsDisplay};

require_once  'vendor/autoload.php';

// --Strategy Pattern--
// $myPhoto = new CameraAppPlus();
// $myPhoto->take();
// $myPhoto->setSharableBehavior(new SocialMedia());
// echo "<br>";
// $myPhoto->share();



// --Adapter Pattern--
// function testDuck(Duck $duck)
// {
//     $duck->fly();
//     echo "<br>";
//     $duck->quack();
// }

// --Adapter Example 1--
// $mallard1 = new MallardDuck();
// testDuck($mallard1);

// echo "<br>";

// $turkey = new WildTurkey();
// $turkeyAdapter = new TurkeyAdapter($turkey);
// testDuck($turkeyAdapter);


// echo "<br>";

// --Adapter Challenge--
// $drone = new SuperDrone();
// $droneAdapter = new DroneAdapter($drone);
// testDuck($droneAdapter);


// --Ovserver example--
// $subject = new SimpleSubject();
// $observer1 = new SimpleObserver($subject);
// $observer2 = new SimpleObserver($subject);
// $subject->removeObserver($observer1);
// $subject->setValue(12);


// --Observer Challenge--
$weatherData = new WeatherData();


$currentMeasurements = new CurrentConditionDisplay($weatherData);
$foreCast = new ForecastDisplay($weatherData);
$statistics = new StatisticsDisplay($weatherData);


echo "<br><br>First change: <br>";
$weatherData->setMeasurements(30, 12, 30);
echo "<br><br>Second change: <br>";
$weatherData->setMeasurements(60, 32, 19);
echo "<br>Third change: <br>";
$weatherData->setMeasurements(37,21,21);
