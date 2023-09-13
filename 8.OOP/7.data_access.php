<?php

class Car {

    public $wheels = 4;//public variables can be accessed inside and outside of that class
    protected $doors = 4;//protected variables can be accessed inside that class and subclasses or methods of that class
    private $hood = 1;//private variables can be accessed only inside that class
    var $engine = 1;

    

    function IncreaseWheels(){
        $this->wheels = 10;
    }
}

$bmw = new Car();

?>