<?php
namespace Phppractice\ObserverPattern_Challenge;

interface Subject{
    
    function registerObserver(Observer $o);
    function removeObserver(Observer $o);
    function notifyObservers();
    
}
