<?php

namespace Phppractice\AdapterPattern_Ex1;
// use Phppractice\AdapterPattern_Ex1\Turkey;

class WildTurkey implements Turkey{
    
    public function gobble()
    {
        echo "I am gobbling baby";
    }

    public function fly()
    {
        echo "I am flying differently coz I am a turkey";
    }
}
?>