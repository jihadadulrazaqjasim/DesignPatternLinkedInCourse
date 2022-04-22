<?php

namespace Phppractice\StrategyPattern;

class Text implements SharableBehavior{

public function share()
{
    echo "Share with text yay";
}
}
?>