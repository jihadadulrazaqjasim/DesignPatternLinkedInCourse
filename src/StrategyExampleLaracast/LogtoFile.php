<?php

namespace Phppractice\StrategyExampleLaracast;

class LogtoFile implements LogInterface
{
    public function log()
    {
        echo "Log to a File";
    }

    
}