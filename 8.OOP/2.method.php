<?php

class Car {
    function MoveWheels(){
        echo "Wheels are moving";
    }
}

if(method_exists("Car", "MoveWheels")){
    echo "Method Exists.";
}else{
    echo "Method does not exist.";
}



?>