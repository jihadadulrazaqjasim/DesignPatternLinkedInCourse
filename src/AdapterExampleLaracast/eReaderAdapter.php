<?php

namespace Phppractice\AdapterExampleLaracast;

class eReaderAdapter implements BookInterface
{
    private $eReader;
    public function __construct(eReaderInterface $eReader)
    {
        $this->eReader = $eReader;
    }
    public function open()
    {
        $this->eReader->turnOn();
    }

    public function turnPage()
    {
        $this->eReader->pressNextButton();
    }
}
