<?php

namespace Phppractice\DesignPatternLinkedIn\StrategyPattern;

class Text implements SharableBehavior{

public function share()
{
    echo "Share with text yay";
}
}
?>