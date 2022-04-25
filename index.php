<?php

use Phppractice\StrategyPattern\{CameraAppPlus, SocialMedia};
use Phppractice\AdapterPattern_Ex1\{Duck, MallardDuck, TurkeyAdapter, WildTurkey};
use  Phppractice\AdapterPattern_Challenge\{DroneAdapter, SuperDrone};
use Phppractice\DecoratorPattern_Ex\Beverage;
use Phppractice\ObserverPattern_Ex\{SimpleObserver, SimpleSubject};
use Phppractice\ObserverPattern_Challenge\{WeatherData, CurrentConditionDisplay, ForecastDisplay, StatisticsDisplay};
use Phppractice\DecoratorPattern_Ex\{DarkRoast, Mocha, Whip};
use Phppractice\DecoratorPattern_Challenge\{Cheese, Olives, ThinCrustPizza, ThickCrustPizza};


use Phppractice\FactoryPattern_Ex\{ChicagoStylePizzaStore,NYStylePizzaStore};

use Phppractice\FactoryPattern_Challenge\{PacificCalendar,ZoneFactory};

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
// $weatherData = new WeatherData();
// $currentMeasurements = new CurrentConditionDisplay($weatherData);
// $foreCast = new ForecastDisplay($weatherData);
// $statistics = new StatisticsDisplay($weatherData);

// echo "<br><br>First change: <br>";
// $weatherData->setMeasurements(30, 12, 30);
// echo "<br><br>Second change: <br>";
// $weatherData->setMeasurements(60, 32, 19);
// echo "<br>Third change: <br>";
// $weatherData->setMeasurements(37,21,21);


// --Decorator Pattern Example--

// $darkRoast = new DarkRoast();
// $darkRoast = new Whip($darkRoast);
// $darkRoast = new Mocha($darkRoast);

// $darkRoast = new Whip($darkRoast);

// echo $darkRoast->getDescription() . " $" . $darkRoast->cost();

// --Deecorator Pattern Challenge

// $pizza1 = new ThickCrustPizza();

// $pizza1 = new Cheese($pizza1);

// $pizza1 = new Olives($pizza1);

// echo $pizza1->getDescription() . " $" . $pizza1->cost();

// $chicagoStore = new ChicagoStylePizzaStore();

// $chicagoStore->orderPizza("cheese");

$zonefactory = new ZoneFactory();

$pacific = new PacificCalendar($zonefactory);

$pacific->print();