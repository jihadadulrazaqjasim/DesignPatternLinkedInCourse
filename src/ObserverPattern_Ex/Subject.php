<?php

namespace Phppractice\ObserverPattern_Ex;

interface Subject
{

    function registerObserver(Observer $o);
    function removeObserver(Observer $o);
    function notifyObservers();
}
