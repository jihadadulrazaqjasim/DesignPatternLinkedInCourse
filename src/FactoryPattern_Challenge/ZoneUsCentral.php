<?php

namespace Phppractice\FactoryPattern_Challenge;

class ZoneUsCentral extends Zone
{

 function __construct()
 {
     $this->displayName="US/Central";
     $this->offset= -6;
 }
}
