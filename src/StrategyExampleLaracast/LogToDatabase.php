<?php

namespace Phppractice\StrategyExampleLaracast;

class LogToDatabase implements LogInterface
{
    public function log()
    {
        echo "Log to a Database";
    }
}