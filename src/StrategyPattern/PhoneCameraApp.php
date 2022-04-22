<?php
namespace Phppractice\StrategyPattern;

abstract class PhoneCameraApp {

    // use SharableBehavior;

   public   $sharableB;

    public function take()
    {
        echo "I am taking";
    }
    public function save() {
		echo "Saving the photo";
	}

    abstract function edit();

    public function setSharableBehavior( $sharableB)
    {
        $this->sharableB = $sharableB;

    }
    public function share()
    {
        $this->sharableB->share();
    }
}
?>