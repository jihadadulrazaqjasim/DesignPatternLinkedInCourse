<?php

namespace Phppractice\ObserverPattern_Ex;

class SimpleObserver implements Observer
{
    private int $value;
    private Subject $simpleSubject;

    function __construct(Subject $subject)
    {
        $this->simpleSubject = $subject;
        $subject->registerObserver($this);
    }

    public function update(int $value)
    {
        $this->value = $value;
        $this->display();
    }

    public function display()
    {
        echo "Value: " . $this->value;
    }
}