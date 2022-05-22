<?php

namespace Phppractice\AdapterExampleLaracast;

class Book implements BookInterface
{
    public function open()
    {
        echo "Opening the book";
    }

    public function turnPage()
    {
        echo "Turning the page";
    }
}