<?php
namespace Phppractice\DesignPatternLinkedIn\AdapterPattern_Ex1;

class TurkeyAdapter implements Duck{

    public Turkey $turkey;

    function __construct(Turkey $turkey){
        $this->turkey = $turkey;
    }
    public function quack()
    {
            $this->turkey->gobble();
    }

    public function fly()
    {
        for($i=0;$i<5;$i++){
         $this->turkey->fly();
        }
    }
}
?>