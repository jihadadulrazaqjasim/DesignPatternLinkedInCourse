<?php

namespace Phppractice\AdapterExampleLaracast;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        echo "turn the Kindle On";
    }

    public function pressNextButton()
    {
        echo "press the next button on the kindle";
    }
}
