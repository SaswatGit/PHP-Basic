<?php

class Car {

    static $wheels = 4;
    var $doors = 4;
    var $hood = 1;
    var $engine = 1;

    

    function IncreaseWheels(){
        Car::$wheels = 10;
    }
}

$bmw = new Car();

//echo $bmw->wheels; // wrong way to display static data

echo Car::$wheels . "<br>";

$bmw->IncreaseWheels();
echo Car::$wheels;



?>