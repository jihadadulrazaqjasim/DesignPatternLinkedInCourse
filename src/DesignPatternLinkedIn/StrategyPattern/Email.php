<?php

namespace Phppractice\DesignPatternLinkedIn\StrategyPattern;

class Email implements SharableBehavior{

public function share()
{
    echo "Share with email yay";
}
}
?>