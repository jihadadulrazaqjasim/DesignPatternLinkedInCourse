<?php

namespace Phppractice\ObserverPattern_Ex;

class SimpleSubject implements Subject
{
    private $observers;
    private int $value = 0;

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
        if (($key = array_search($o, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->value);
        }
    }

    public function setValue(int $value)
    {
        $this->value = $value;
        $this->notifyObservers();
    }

    public function getValue()
    {
        return $this->value;
    }
}
