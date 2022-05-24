<?php

namespace Phppractice\StrategyExampleLaracast;

abstract class App
{
    protected LogInterface $logInterface;

    public function setLoggableBehavior(LogInterface $logInterface)
    {
        $this->logInterface = $logInterface;
    }
    public function log()
    {
        $this->logInterface->log();
    }

    abstract function access();
}
