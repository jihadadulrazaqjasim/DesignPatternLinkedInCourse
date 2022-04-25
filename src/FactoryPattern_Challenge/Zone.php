<?php

namespace Phppractice\FactoryPattern_Challenge;

class Zone
{
    protected string $displayName;
    protected int $offset;

    function getDisplayName(): string
    {
        return $this->displayName;
    }
    public function getOffset(): int
    {
        return $this->offset;
    }
}
