<?php

function say_something(){
    echo 'Hello<br>';
}
say_something();

//function call inside another function
function init(){
    calculate();
    echo '<br>';
    ask();
}
init();

function calculate(){
    echo 45+78;
}
function ask(){
    echo 'How are you?';
}

?>