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

echo $bmw -> wheels;
echo "<br>";

$bmw->wheels = 8;
echo $bmw->wheels;
echo "<br>";

$bmw->IncreaseWheels();
echo $bmw->wheels;



?>