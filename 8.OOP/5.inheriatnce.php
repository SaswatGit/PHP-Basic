<?php


class Car {

    var $wheels = 4;
    var $doors = 4;
    var $hood = 1;
    var $engine = 1;

    function MoveWheels(){
        echo "Wheels are moving";
    }

    function IncreaseWheels(){
        $this->wheels = 10;
    }
}

$bmw = new Car();


class Plane extends Car {//Plane class inherited all functionality of Car

}


$jet = new Plane();
echo $jet->wheels;

?>