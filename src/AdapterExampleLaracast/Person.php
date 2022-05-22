<?php

namespace Phppractice\AdapterExampleLaracast;

// This is the client, this only knows about book class.
class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}
